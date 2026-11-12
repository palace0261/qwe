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
      `orderstt` VARCHAR(255) NOT NULL DEFAULT '1',
      `inno` VARCHAR(255) NOT NULL DEFAULT '',
      `tasks` LONGTEXT NULL,
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

  // 1-0-3) 기존 테이블에 orderstt가 없을 수 있으므로 추가 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `orderstt` VARCHAR(255) NOT NULL DEFAULT '1' AFTER `totprc`"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(권한/환경 문제는 이후 화면에 표시될 수 있음)
    }
  }

  // 1-0-3-1) 기존 orderstt 타입이 숫자일 수 있으므로 문자열로 변경 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` MODIFY COLUMN `orderstt` VARCHAR(255) NOT NULL DEFAULT '1'"
    );
  } catch (Throwable $e) {
    // 권한/환경 문제 등은 무시
  }

  // 1-0-4) 기존 테이블에 inno가 없을 수 있으므로 추가 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `inno` VARCHAR(255) NOT NULL DEFAULT '' AFTER `orderstt`"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(권한/환경 문제는 이후 화면에 표시될 수 있음)
    }
  }

  // 1-0-4-1) 기존 inno 타입이 숫자일 수 있으므로 문자열로 변경 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` MODIFY COLUMN `inno` VARCHAR(255) NOT NULL DEFAULT ''"
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

  // 1-2) 기존 테이블에 tasks가 없을 수 있으므로 추가 시도
  // LONGTEXT는 MySQL 버전에 따라 DEFAULT를 허용하지 않으므로 NULL로 둡니다.
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` ADD COLUMN `tasks` LONGTEXT NULL AFTER `inno`"
    );
  } catch (Throwable $e) {
    // 1060: Duplicate column name
    if (!($e instanceof mysqli_sql_exception) || (int)$e->getCode() !== 1060) {
      // 무시(권한/환경 문제는 이후 화면에 표시될 수 있음)
    }
  }

  // 1-2-1) tasks 타입 보정 시도
  try {
    $conn->query(
      "ALTER TABLE `{$tableName}` MODIFY COLUMN `tasks` LONGTEXT NULL"
    );
  } catch (Throwable $e) {
    // 권한/환경 문제 등은 무시
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

  $testnoValue = (string)($_POST['testno'] ?? (string)$nextTestno);

  if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    // row 업데이트(서버 전송)
    if (($_POST['mode'] ?? '') === 'update') {
      $sno = trim((string)($_POST['sno'] ?? ''));
      $orderstt = trim((string)($_POST['orderstt'] ?? ''));
      if ($orderstt === '' || !in_array($orderstt, ['1', '2', '3', '4'], true)) {
        $orderstt = '1';
      }
      $inno = trim((string)($_POST['inno'] ?? ''));

      if ($sno === '' || !ctype_digit($sno)) {
        $formError = 'sno 값이 올바르지 않습니다.';
      } else {
        $snoInt = (int)$sno;
        try {
          $stmt = $conn->prepare("UPDATE `{$tableName}` SET `orderstt` = ?, `inno` = ? WHERE `sno` = ?");
          $stmt->bind_param('ssi', $orderstt, $inno, $snoInt);
          $stmt->execute();
          $affected = $stmt->affected_rows;
          $stmt->close();
          $message = "업데이트되었습니다. sno={$snoInt} (affected={$affected})";
        } catch (Throwable $e) {
          $formError = '업데이트 중 오류: ' . $e->getMessage();
        }
      }
    } elseif (($_POST['mode'] ?? '') === 'update_tasks') {
      // row tasks만 업데이트(서버 전송)
      $sno = trim((string)($_POST['sno'] ?? ''));
      $tasks = (string)($_POST['tasks'] ?? '');

      if ($sno === '' || !ctype_digit($sno)) {
        $formError = 'sno 값이 올바르지 않습니다.';
      } else {
        $snoInt = (int)$sno;
        try {
          $stmt = $conn->prepare("UPDATE `{$tableName}` SET `tasks` = ? WHERE `sno` = ?");
          $stmt->bind_param('si', $tasks, $snoInt);
          $stmt->execute();
          $affected = $stmt->affected_rows;
          $stmt->close();
          $message = "tasks 저장되었습니다. sno={$snoInt} (affected={$affected})";
        } catch (Throwable $e) {
          $formError = 'tasks 저장 중 오류: ' . $e->getMessage();
        }
      }
    } else {
    $testno = trim((string)($_POST['testno'] ?? ''));
    $title = trim((string)($_POST['title'] ?? ''));
    $detail = trim((string)($_POST['detail'] ?? ''));
    $totprc = trim((string)($_POST['totprc'] ?? ''));
    $orderstt = trim((string)($_POST['orderstt'] ?? ''));
    if ($orderstt === '' || !in_array($orderstt, ['1', '2', '3', '4'], true)) {
      $orderstt = '1';
    }
    $inno = trim((string)($_POST['inno'] ?? ''));
    $tasks = (string)($_POST['tasks'] ?? '');

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
          $stmt = $conn->prepare("INSERT INTO `{$tableName}` (`testno`, `title`, `detail`, `totprc`, `orderstt`, `inno`, `tasks`) VALUES (?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param('issssss', $testnoInt, $title, $detail, $totprc, $orderstt, $inno, $tasks);
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
  }

  // db-list: 저장된 내역 조회
  try {
    try {
      $result = $conn->query(
        "SELECT `sno`, `testno`, `title`, `detail`, `totprc`, `orderstt`, `inno`, `tasks`, `created_at` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
      );
    } catch (Throwable $e1) {
      try {
        // orderstt/inno가 없고 created_at만 있는 경우
        $result = $conn->query(
          "SELECT `sno`, `testno`, `title`, `detail`, `totprc`, `tasks`, `created_at` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
        );
      } catch (Throwable $e1_1) {
        try {
          // created_at만 없는 경우
        $result = $conn->query(
          "SELECT `sno`, `testno`, `title`, `detail`, `totprc`, `orderstt`, `inno`, `tasks` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
        );
        } catch (Throwable $e2) {
          try {
            // orderstt/inno/created_at가 없는 경우 (totprc만 있는 구버전)
            $result = $conn->query(
              "SELECT `sno`, `testno`, `title`, `detail`, `totprc`, `tasks` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
            );
          } catch (Throwable $e2_1) {
            // testno도 없는 경우
            try {
              // totprc도 없는 경우
              $result = $conn->query(
                "SELECT `sno`, `testno`, `title`, `detail`, `tasks` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
              );
            } catch (Throwable $e3) {
              $result = $conn->query(
                "SELECT `sno`, `title`, `detail` FROM `{$tableName}` ORDER BY `sno` DESC LIMIT 100"
              );
            }
          }
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
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>es_testTable 입력</title>
</head>
<style>
  #insert-form, #insert-form label {
    display: none;
    }
</style>
<body>


  <?php if ($message !== ''): ?>
    <p style="color: green;"><?= h($message) ?></p>
  <?php endif; ?>

  <?php if ($formError !== ''): ?>
    <p style="color: red;"><?= h($formError) ?></p>
  <?php endif; ?>

  <?php if ($dbError !== ''): ?>
    <p style="color: red;">DB 오류: <?= h($dbError) ?></p>
  <?php endif; ?>

  <?php if ($schemaWarning !== ''): ?>
    <p style="color: #b26a00;">스키마 경고: <?= h($schemaWarning) ?></p>
  <?php endif; ?>

  <form id="insert-form" method="post" action="">
    <div>
      <label for="testno">testno</label><br>
      <input type="text" id="testno" name="testno" value="<?= h((string)($testnoValue ?? '')) ?>" hidden>
    </div>
    <div>
      <label for="title">title</label><br>
      <input type="text" id="title" name="title" value="<?= h((string)($_POST['title'] ?? '')) ?>" hidden>
    </div>
    <div style="margin-top: 8px;">
      <label for="detail">detail</label><br>
      <textarea id="detail" name="detail" rows="4" cols="40" required><?= h((string)($_POST['detail'] ?? '')) ?></textarea>
    </div>
    <div style="margin-top: 8px;">
      <label for="totprc">totprc</label><br>
      <input type="text" id="totprc" name="totprc" value="<?= h((string)($_POST['totprc'] ?? '')) ?>" hidden>
    </div>
    <div>
      <label for="orderstt">orderstt</label><br>
      <input type="text" id="orderstt" name="orderstt" value="<?= h((string)($_POST['orderstt'] ?? '1')) ?>" hidden>
    </div>
    <div>
      <label for="inno">inno</label><br>
      <input type="text" id="inno" name="inno" value="<?= h((string)($_POST['inno'] ?? '')) ?>" hidden>
    </div>
    <div>
      <label for="tasks">tasks</label><br>
      <input type="text" id="tasks" name="tasks" value="<?= h((string)($_POST['tasks'] ?? '')) ?>" hidden>
    </div>
    <div style="margin-top: 8px; opacity: 0; height: 0; overflow: hidden;">
      <button type="submit"></button>
    </div>
  </form>

  <section id="db-list">
    <h2>B2B DB List</h2>

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
            <th>No</th>
            <th>주문번호</th>
            <th>주문자명</th>
            <th>주문정보</th>
            <th>주문금액</th>
            <th>주문상태</th>
            <th>배송정보</th>
            <th>업무번호</th>
            <th>생성일자</th>
            <th>save</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r): ?>
            <tr>
              <?php
                $rowFormId = 'rowform_' . (string)($r['sno'] ?? '');
                $rowTasksFormId = 'rowform_tasks_' . (string)($r['sno'] ?? '');
              ?>
              <td><?= h((string)($r['sno'] ?? '')) ?></td>
              <td><?= h((string)($r['testno'] ?? '')) ?></td>
              <td><?= h((string)($r['title'] ?? '')) ?></td>
              <td><pre style="margin:0;white-space:pre-wrap;"><?= h((string)($r['detail'] ?? '')) ?></pre></td>
              <td><?= h((string)($r['totprc'] ?? '')) ?></td>
              <td>
                <?= h((string)($r['orderstt'] ?? '')) ?>
                <select name="orderstt" form="<?= h($rowFormId) ?>">
                  <?php $curOrderstt = (string)($r['orderstt'] ?? ''); ?>
                  <option value="1" <?= $curOrderstt === '1' ? 'selected' : '' ?>>주문접수</option>
                  <option value="2" <?= $curOrderstt === '2' ? 'selected' : '' ?>>입금완료</option>
                  <option value="3" <?= $curOrderstt === '3' ? 'selected' : '' ?>>출고완료</option>
                  <option value="4" <?= $curOrderstt === '4' ? 'selected' : '' ?>>취소반품</option>
                </select>
              </td>
              <td>
                <input type="checkbox" name="inno">
              </td>
              <td>
                <?= h((string)($r['tasks'] ?? '')) ?>
                <input type="text" name="tasks" value="<?= h((string)($r['tasks'] ?? '')) ?>" form="<?= h($rowTasksFormId) ?>" hidden>
              </td>
              <td><?= h((string)($r['created_at'] ?? '')) ?></td>
              <td>
                <form id="<?= h($rowFormId) ?>" method="post" action="">
                  <input type="hidden" name="mode" value="update">
                  <input type="hidden" name="sno" value="<?= h((string)($r['sno'] ?? '')) ?>">
                  <button type="button" class="row-change" onclick="showRowSubmit(this)">변경</button>
                  <button type="submit" class="row-submit" style="display:none;">submit</button>
                </form>

                <form id="<?= h($rowTasksFormId) ?>" method="post" action="" style="margin-top:6px;">
                  <input type="hidden" name="mode" value="update_tasks">
                  <input type="hidden" name="sno" value="<?= h((string)($r['sno'] ?? '')) ?>">
                  <!-- <button type="button" class="row-change" onclick="showRowSubmit(this)">tasks변경</button> -->
                  <button type="submit" class="row-submit" style="display:none;">저장</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </section>

  <script>
    function showRowSubmit(btn) {
      try {
        var form = btn && btn.closest ? btn.closest('form') : null;
        if (!form) return;
        var submitBtn = form.querySelector('.row-submit');
        if (submitBtn) submitBtn.style.display = 'inline-block';
      } catch (e) {
        // no-op
      }
    }
  </script>
  
</body>
</html>