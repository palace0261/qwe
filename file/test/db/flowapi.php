<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbHost = 'svc.sel4.cloudtype.app:31446';
$dbUser = 'root';
$dbPass = 'palace0261@@';
$dbName = 'palace0261';

$tableName = 'es_testTable';
$startAutoIncrement = 33;

$message = '';
$formError = '';
$dbError = '';
$listError = '';
$schemaWarning = '';
$rows = [];

function h(string $value): string
{
  return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function ensureTable(mysqli $conn, string $tableName, int $startAutoIncrement): string
{
  $warning = '';

  // 1) 테이블 생성 (없으면)
  $createSql = "
    CREATE TABLE IF NOT EXISTS `{$tableName}` (
      `sno` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
      `testno` BIGINT UNSIGNED NULL,
      `title` VARCHAR(255) NOT NULL,
      `detail` TEXT NOT NULL,
      `totprc` VARCHAR(255) NOT NULL DEFAULT '',
      PRIMARY KEY (`sno`)
      , UNIQUE KEY `ux_testno` (`testno`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
  ";
  $conn->query($createSql);

  // 1-0) 기존 테이블에 testno가 없을 수 있으므로 추가 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `testno` BIGINT UNSIGNED NULL AFTER `sno`"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(권한/환경 문제는 이후 화면에 표시될 수 있음)
    }
  }

  // 1-0-1) testno 중복 방지(유니크 인덱스) 보장
  try {
    $conn->query("ALTER TABLE `{$tableName}` ADD UNIQUE KEY `ux_testno` (`testno`)");
  } catch (Throwable $e) {
    // 1061: Duplicate key name (이미 존재)
    // 1062: Duplicate entry (기존 데이터에 중복 testno가 존재)
    if ($e instanceof mysqli_sql_exception) {
      $code = (int)$e->getCode();
      if ($code === 1061) {
        // already exists
      } elseif ($code === 1062) {
        $warning = '기존 데이터에 testno 중복이 있어 DB 유니크 제약(ux_testno)을 만들지 못했습니다. 중복 데이터를 정리한 뒤 다시 시도하세요.';
      } else {
        $warning = 'DB 유니크 제약(ux_testno) 설정 중 오류: ' . $e->getMessage();
      }
    } else {
      $warning = 'DB 유니크 제약(ux_testno) 설정 중 오류: ' . $e->getMessage();
    }
  }

  // 1-0-2) 기존 테이블에 totprc가 없을 수 있으므로 추가 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `totprc` VARCHAR(255) NOT NULL DEFAULT '' AFTER `detail`"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(권한/환경 문제는 이후 화면에 표시될 수 있음)
    }
  }

  // 1-0-2-1) 기존 totprc 타입이 숫자일 수 있으므로 title과 동일하게 문자열로 변경 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` MODIFY COLUMN `totprc` VARCHAR(255) NOT NULL DEFAULT ''"
    );
  } catch (Throwable $e) {
    // 권한/환경 문제 등은 무시
  }

  // 1-1) 기존 테이블에 created_at이 없을 수 있으므로 추가 시도
  // (이미 있으면 Duplicate column 에러가 나는데, 그 경우는 무시)
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    // 그 외(권한 등)는 상위에서 처리/표시될 수 있으므로 재throw하지 않음
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(목록 조회에서 created_at 없는 경우 fallback 처리)
    }
  }

  // 2) AUTO_INCREMENT 시작값을 최소 33으로 보장
  // MySQL은 현재 값보다 낮게 설정하면 자동으로 무시(또는 유지)하므로 안전합니다.
  $conn->query("ALTER TABLE `{$tableName}` AUTO_INCREMENT = {$startAutoIncrement}");

  return $warning;
}

try {
  $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
  $conn->set_charset('utf8mb4');

  $schemaWarning = ensureTable($conn, $tableName, $startAutoIncrement);

  // 폼에 표시할 다음 testno 계산 (없으면 1부터)
  $nextTestno = 1;
  try {
    $res = $conn->query("SELECT COALESCE(MAX(`testno`), 0) AS max_testno FROM `{$tableName}`");
    $maxRow = $res->fetch_assoc();
    $nextTestno = ((int)($maxRow['max_testno'] ?? 0)) + 1;
  } catch (Throwable $e) {
    // testno 컬럼이 아직 없거나(기존 테이블), 권한 문제인 경우에도 폼은 동작하게 둠
    $nextTestno = 1;
  }

  // 처음 접속(GET) 시에는 testno를 자동으로 채우지 않음.
  // 사용자가 입력한 경우(POST)만 값 유지.
  $testnoValue = (string)($_POST['testno'] ?? '');

  if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $testno = trim((string)($_POST['testno'] ?? ''));
    $title = trim((string)($_POST['title'] ?? ''));
    $detail = trim((string)($_POST['detail'] ?? ''));
    $totprc = trim((string)($_POST['totprc'] ?? ''));

    if ($title === '' || $detail === '' || $totprc === '') {
      $formError = 'title, detail, totprc를 모두 입력해주세요.';
    } elseif ($testno === '' || !ctype_digit($testno)) {
      $formError = 'testno 값이 올바르지 않습니다.';
    } else {
      $testnoInt = (int)$testno;

      // 1) 서버에서 중복 사전 체크
      try {
        $chk = $conn->prepare("SELECT 1 FROM `{$tableName}` WHERE `testno` = ? LIMIT 1");
        $chk->bind_param('i', $testnoInt);
        $chk->execute();
        $chkRes = $chk->get_result();
        $exists = $chkRes && $chkRes->fetch_row();
        $chk->close();
        if ($exists) {
          $formError = '이미 존재하는 testno 입니다. (중복 저장 불가)';
        }
      } catch (Throwable $e) {
        // get_result 미지원 환경이거나 권한 문제가 있어도, 아래 INSERT에서 DB 유니크 제약으로 최종 방어
      }

      // 2) DB 유니크 제약으로 최종 중복 차단 + 중복키 처리
      if ($formError === '') {
        try {
          $stmt = $conn->prepare("INSERT INTO `{$tableName}` (`testno`, `title`, `detail`, `totprc`) VALUES (?, ?, ?, ?)");
          $stmt->bind_param('isss', $testnoInt, $title, $detail, $totprc);
          $stmt->execute();
          $newSno = $stmt->insert_id;
          $stmt->close();

          $message = "저장되었습니다. sno={$newSno}, testno={$testnoInt}";
        } catch (mysqli_sql_exception $e) {
          if ((int)$e->getCode() === 1062) {
            $formError = '이미 존재하는 testno 입니다. (DB에서 중복 차단됨)';
          } else {
            throw $e;
          }
        }
      }
    }
  }

  // db-list: 저장된 내역 조회
  try {
    try {
      $result = $conn->query(
        "SELECT `sno`, `testno`, `title`, `detail`, `totprc`, `created_at` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
      );
    } catch (Throwable $e1) {
      try {
        // created_at만 없는 경우
        $result = $conn->query(
          "SELECT `sno`, `testno`, `title`, `detail`, `totprc` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
        );
      } catch (Throwable $e2) {
        // testno도 없는 경우
        try {
          // totprc도 없는 경우
          $result = $conn->query(
            "SELECT `sno`, `testno`, `title`, `detail` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
          );
        } catch (Throwable $e3) {
          $result = $conn->query(
            "SELECT `sno`, `title`, `detail` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
          );
        }
      }
    }
    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }
  } catch (Throwable $e) {
    $listError = $e->getMessage();
  }
} catch (Throwable $e) {
  $dbError = $e->getMessage();
} finally {
  if (isset($conn) && $conn instanceof mysqli) {
    $conn->close();
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>자동메일 발송 - API 전송</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    div { margin-bottom: 15px; }
    label { display: inline-block; width: 100px; font-weight: bold; }
    input[type="text"], textarea, input[type="submit"] { padding: 8px; font-size: 14px; }
    input[type="text"], textarea { border: 1px solid #ccc; border-radius: 4px; }
    input[type="submit"] { background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
    input[type="submit"]:hover { background-color: #45a049; }
  </style>
</head>
<body>
  <h2>자동메일 발송 전 Flow API 전송 26.03.31</h2>
  <div>
    <label>API Key:</label>
    <input id="apiKey" type="text" style="width: 400px;" value="20260310042354473-54f40d54-0833-4c3b-9f4a-1ce8e39c98f6" readonly>
  </div>
  <div>
    <label>testno:</label>
    <input id="testno" type="text" value="<?= h($testnoValue) ?>" style="width: 400px;">
  </div>
  <div>
    <label>메시지:</label>
    <textarea id="contents" style="width: 400px;" rows="12">테스트 메시지ㅁㅁ</textarea>
  </div>
  <input id="submitBtn" type="submit" value="전송">

  <script>
    // b2b-db-list rows를 testno -> detail 매핑으로 만들어, 입력한 testno에 따라 contents를 자동 세팅
    const normalizeTestnoKey = (value) => {
      const raw = String(value ?? '').trim();
      if (raw === '') return '';
      // 숫자 문자열이면 선행 0 제거 (예: 001 -> 1). 단, 전체가 0인 경우는 0 유지
      if (/^\d+$/.test(raw)) return raw.replace(/^0+(?=\d)/, '');
      return raw;
    };

    const detailByTestno = (() => {
      try {
        const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
        const map = Object.create(null);
        if (Array.isArray(rows)) {
          for (const r of rows) {
            const key = (r && r.testno != null) ? normalizeTestnoKey(r.testno) : '';
            if (!key) continue;
            // 최신 sno DESC로 가져온 rows이므로, 처음 매칭되는 값을 우선 사용
            if (map[key] == null) {
              map[key] = (r && r.detail != null) ? String(r.detail) : '';
            }
          }
        }
        return map;
      } catch (e) {
        console.warn('rows->detail 매핑 생성 실패:', e);
        return Object.create(null);
      }
    })();

    function syncContentsFromTestno() {
      const testnoEl = document.getElementById('testno');
      const contentsEl = document.getElementById('contents');
      if (!testnoEl || !contentsEl) return;

      const key = normalizeTestnoKey(testnoEl.value);
      if (key === '') return;

      if (Object.prototype.hasOwnProperty.call(detailByTestno, key)) {
        contentsEl.value = detailByTestno[key] ?? '';
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      const testnoEl = document.getElementById('testno');
      if (testnoEl) {
        testnoEl.addEventListener('input', syncContentsFromTestno);
        testnoEl.addEventListener('change', syncContentsFromTestno);
      }
      // 초기값으로도 한번 동기화
      syncContentsFromTestno();
    });
  </script>

  <script>
    function sendFlowTeamApi() {
      const apiKey = document.getElementById('apiKey').value;
      const testnoEl = document.getElementById('testno');
      const contents = document.getElementById('contents').value;

      const testnoKey = normalizeTestnoKey(testnoEl ? testnoEl.value : '');
      console.log('전송 시작:', { testno: testnoKey });
      
      if (!apiKey) {
        console.warn('API 키가 없습니다.');
        return Promise.reject(new Error('API 키를 입력해주세요.'));
      }
      
      const options = {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'x-flow-api-key': apiKey,
        },
        body: JSON.stringify({
          registerId: 'palace790@gmail.com',
          contents: contents,
        }),
      };
      
      return fetch('https://api.flow.team/v1/chats/1082063/messages', options)
        .then(response => {
          console.log('응답 상태:', response.status, response.statusText);
          if (!response.ok) {
            return response.text().then(text => {
              console.error('응답 내용:', text);
              throw new Error(`HTTP ${response.status}: ${text}`);
            });
          }
          return response.json();
        })
        .then(data => {
          console.log('전송 성공:', data);
          return data;
        })
        .catch(err => {
          console.error('전송 실패:', err);
          throw err;
        });
    }

    // 수동 전송 버튼 클릭 이벤트
    document.getElementById('submitBtn').addEventListener('click', function(e) {
      e.preventDefault();
      
      sendFlowTeamApi()
        .then(data => {
          console.log('메시지가 전송되었습니다!', data);
        })
        .catch(err => {
          console.warn('메시지 전송에 실패했습니다:', err && err.message ? err.message : err);
        });
    });
  </script>




  <section id="db-list">
    <h2>b2b-db-list</h2>

    <?php if ($dbError !== ''): ?>
      <p>DB 연결/초기화 오류로 목록을 표시하지 못했습니다.</p>
    <?php elseif ($listError !== ''): ?>
      <p>조회 중 오류가 있어 목록을 표시하지 못했습니다.</p>
      <p style="color: red;">조회 오류: <?= h($listError) ?></p>
    <?php elseif (count($rows) === 0): ?>
      <p>저장된 데이터가 없습니다.</p>
    <?php else: ?>
      <table border="1" cellpadding="6" cellspacing="0">
        <thead>
          <tr>
            <th>sno</th>
            <th>testno</th>
            <th>title</th>
            <th>detail</th>
            <th>totprc</th>
            <th>created_at</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r): ?>
            <tr>
              <td><?= h((string)($r['sno'] ?? '')) ?></td>
              <td><?= h((string)($r['testno'] ?? '')) ?></td>
              <td><?= h((string)($r['title'] ?? '')) ?></td>
              <td><pre style="margin:0;white-space:pre-wrap;"><?= h((string)($r['detail'] ?? '')) ?></pre></td>
              <td><?= h((string)($r['totprc'] ?? '')) ?></td>
              <td><?= h((string)($r['created_at'] ?? '')) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </section>

</body>
</html>