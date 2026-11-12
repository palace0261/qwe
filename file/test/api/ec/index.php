<?php
// 0327 2026-1 ㅁㄴㅇ

declare(strict_types=1);

session_start();

function callEcountZoneApi(string $comCode, bool $useTestServer): array
{
  if (!extension_loaded('curl')) {
    return [
      'ok' => false,
      'error' => 'PHP cURL 확장이 활성화되어 있지 않습니다. (php_curl)',
    ];
  }

  $url = $useTestServer
    ? 'https://sboapi.ecount.com/OAPI/V2/Zone'
    : 'https://oapi.ecount.com/OAPI/V2/Zone';

  $payload = json_encode(
    ['COM_CODE' => $comCode],
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
  );

  if ($payload === false) {
    return [
      'ok' => false,
      'error' => '요청 JSON 생성에 실패했습니다.',
    ];
  }

  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
      'Content-Type: application/json',
      'Accept: application/json',
    ],
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_TIMEOUT => 30,
  ]);

  $raw = curl_exec($ch);
  $curlErr = curl_error($ch);
  $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($raw === false) {
    return [
      'ok' => false,
      'error' => '요청 실패: ' . ($curlErr !== '' ? $curlErr : '알 수 없는 cURL 오류'),
    ];
  }

  $decoded = json_decode($raw, true);
  $jsonErr = json_last_error();

  return [
    'ok' => true,
    'url' => $url,
    'httpCode' => $httpCode,
    'raw' => $raw,
    'json' => $jsonErr === JSON_ERROR_NONE ? $decoded : null,
    'jsonError' => $jsonErr === JSON_ERROR_NONE ? null : json_last_error_msg(),
  ];
}

function callJsonPost(string $url, array $body, int $connectTimeoutSec = 10, int $timeoutSec = 30): array
{
  if (!extension_loaded('curl')) {
    return [
      'ok' => false,
      'error' => 'PHP cURL 확장이 활성화되어 있지 않습니다. (php_curl)',
    ];
  }

  $payload = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  if ($payload === false) {
    return [
      'ok' => false,
      'error' => '요청 JSON 생성에 실패했습니다.',
    ];
  }

  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
      'Content-Type: application/json',
      'Accept: application/json',
    ],
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_CONNECTTIMEOUT => $connectTimeoutSec,
    CURLOPT_TIMEOUT => $timeoutSec,
  ]);

  $raw = curl_exec($ch);
  $curlErr = curl_error($ch);
  $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($raw === false) {
    return [
      'ok' => false,
      'error' => '요청 실패: ' . ($curlErr !== '' ? $curlErr : '알 수 없는 cURL 오류'),
    ];
  }

  $decoded = json_decode($raw, true);
  $jsonErr = json_last_error();

  return [
    'ok' => true,
    'url' => $url,
    'httpCode' => $httpCode,
    'raw' => $raw,
    'json' => $jsonErr === JSON_ERROR_NONE ? $decoded : null,
    'jsonError' => $jsonErr === JSON_ERROR_NONE ? null : json_last_error_msg(),
    'requestBody' => $body,
  ];
}

$zoneResult = null;
$loginResult = null;
$saleOrderResult = null;
$error = null;
$comCode = '';
$env = 'prod';
$action = 'zone';
$loginPath = '/OAPI/V2/OAPILogin';
$userId = '';
$apiCertKey = '';
$lanType = 'ko-KR';

$sessionId = '';
$ioDate = '';
$uploadSerNo = '1';
$cust = '';
$custDes = '';
$empCd = '00098';
$whCd = '';
$ioType = '';
$exchangeType = '';
$exchangeRate = '';
$pjtCd = '';
$docNo = '';
$ttlCtt = '';
$refDes = '';
$collTerm = '';
$agreeTerm = '';
$timeDate = '';
$remarksWin = '';
$prodCd = '';
$prodDes = '';
$sizeDes = '';
$uqty = '';
$qty = '1';
$price = '';
$userPriceVat = '';
$supplyAmt = '';
$supplyAmtF = '';
$vatAmt = '';
$itemTimeDate = '';
$remarks = '';
$itemCd = '';
$uMemo1 = '';
$uMemo2 = '';
$uMemo3 = '';
$uMemo4 = '';
$uMemo5 = '';
$bulkExtraJson = '';
$saleOrderItemsJson = '';
// flow form에 채울 제목/내용 변수
$flowTitle = '';
$flowContents = '';
// 환경변수에서 민감값 읽기
$flowApiKey = getenv('FLOW_API_KEY') ?: '20260310042354473-54f40d54-0833-4c3b-9f4a-1ce8e39c98f6';
$smtpHost = getenv('SMTP_HOST') ?: 'smtp.daum.net';
$smtpPort = getenv('SMTP_PORT') ? (int)getenv('SMTP_PORT') : 465;
$smtpSecure = getenv('SMTP_SECURE') ?: 'ssl';
$smtpUser = getenv('SMTP_USER') ?: 'sodamedia@daum.net';
$smtpPass = getenv('SMTP_PASS') ?: 'gebcngmmvxyynrfk';
$mailFrom = getenv('MAIL_FROM') ?: 'sodamedia@daum.net';
$mailFromName = getenv('MAIL_FROM_NAME') ?: 'ERP API 알림';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Accept JSON payloads too (client sends application/json)
  $rawInput = file_get_contents('php://input');
  $jsonInput = null;
  $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
  if (stripos($contentType, 'application/json') !== false && trim($rawInput) !== '') {
    $jsonInput = json_decode($rawInput, true);
    if (is_array($jsonInput)) {
      // merge json into $_POST-like array
      foreach ($jsonInput as $k => $v) {
        if (!isset($_POST[$k])) $_POST[$k] = $v;
      }
    }
  }
  $action = (string)($_POST['action'] ?? 'zone');
  $comCode = trim((string)($_POST['com_code'] ?? ''));
  $env = (string)($_POST['env'] ?? 'prod');
  $useTestServer = $env !== 'prod';
  $loginPath = trim((string)($_POST['login_path'] ?? $loginPath));
  $userId = trim((string)($_POST['user_id'] ?? ''));
  $apiCertKey = trim((string)($_POST['api_cert_key'] ?? ''));
  $lanType = trim((string)($_POST['lan_type'] ?? $lanType));

  $sessionId = trim((string)($_POST['session_id'] ?? ''));
  $ioDate = trim((string)($_POST['io_date'] ?? ''));
  $uploadSerNo = trim((string)($_POST['upload_ser_no'] ?? $uploadSerNo));
  $cust = trim((string)($_POST['cust'] ?? ''));
  $custDes = trim((string)($_POST['cust_des'] ?? ''));
  $empCd = trim((string)($_POST['emp_cd'] ?? ''));
  $whCd = trim((string)($_POST['wh_cd'] ?? ''));
  $ioType = trim((string)($_POST['io_type'] ?? ''));
  $exchangeType = trim((string)($_POST['exchange_type'] ?? ''));
  $exchangeRate = trim((string)($_POST['exchange_rate'] ?? ''));
  $pjtCd = trim((string)($_POST['pjt_cd'] ?? ''));
  $docNo = trim((string)($_POST['doc_no'] ?? ''));
  $ttlCtt = trim((string)($_POST['ttl_ctt'] ?? ''));
  $refDes = trim((string)($_POST['ref_des'] ?? ''));
  $collTerm = trim((string)($_POST['coll_term'] ?? ''));
  $agreeTerm = trim((string)($_POST['agree_term'] ?? ''));
  $timeDate = trim((string)($_POST['time_date'] ?? ''));
  $remarksWin = trim((string)($_POST['remarks_win'] ?? ''));
  $prodCd = trim((string)($_POST['prod_cd'] ?? ''));
  $prodDes = trim((string)($_POST['prod_des'] ?? ''));
  $sizeDes = trim((string)($_POST['size_des'] ?? ''));
  $uqty = trim((string)($_POST['uqty'] ?? ''));
  $qty = trim((string)($_POST['qty'] ?? $qty));
  $price = trim((string)($_POST['price'] ?? ''));
  $userPriceVat = trim((string)($_POST['user_price_vat'] ?? ''));
  $supplyAmt = trim((string)($_POST['supply_amt'] ?? ''));
  $supplyAmtF = trim((string)($_POST['supply_amt_f'] ?? ''));
  $vatAmt = trim((string)($_POST['vat_amt'] ?? ''));
  $itemTimeDate = trim((string)($_POST['item_time_date'] ?? ''));
  $remarks = trim((string)($_POST['remarks'] ?? ''));
  $itemCd = trim((string)($_POST['item_cd'] ?? ''));
  $uMemo1 = trim((string)($_POST['u_memo1'] ?? ''));
  $uMemo2 = trim((string)($_POST['u_memo2'] ?? ''));
  $uMemo3 = trim((string)($_POST['u_memo3'] ?? ''));
  $uMemo4 = trim((string)($_POST['u_memo4'] ?? ''));
  $uMemo5 = trim((string)($_POST['u_memo5'] ?? ''));
  $bulkExtraJson = (string)($_POST['bulk_extra_json'] ?? '');
  $saleOrderItemsJson = (string)($_POST['saleorder_items_json'] ?? '');

  if (!preg_match('/^\\d{1,6}$/', $comCode)) {
    $error = '회사코드(COM_CODE)는 숫자 1~6자리로 입력해 주세요.';
  } else {
    // 문서 기준 호출 제한 보호
    // - Zone/Login: 테스트 10초, 실서버 10분
    // - 주문 저장(SaveSaleOrder): 보수적으로 10초(테스트/실서버 동일)
    if ($action === 'saleorder') {
      $minIntervalSec = 10;
    } else {
      $minIntervalSec = $useTestServer ? 10 : 600;
    }
    $key = $useTestServer ? 'test' : 'prod';
    $nowTs = time();

    // 실패 누적 방지(동일 세션 기준)
    $failCount = (int)($_SESSION['fail_count'][$key] ?? 0);
    if ($failCount >= 10) {
      $error = '실패가 누적되어 자동 호출을 중단했습니다. (세션 기준) 운영자 확인 후 재시도하세요.';
    } else {
      $lastTs = (int)($_SESSION['last_call'][$key] ?? 0);
      if ($lastTs > 0 && ($nowTs - $lastTs) < $minIntervalSec) {
        $remain = $minIntervalSec - ($nowTs - $lastTs);
        $error = "호출 제한 보호를 위해 잠시 대기해 주세요. (약 {$remain}초 후 재시도)";
      } else {
        $_SESSION['last_call'][$key] = $nowTs;

        // 1) Zone 조회 — 캐시된 값이 있으면 재사용
        $zoneCacheKey = 'zone_' . $comCode . '_' . ($useTestServer ? 'test' : 'prod');
        $zoneResult = null;
        $zoneCache = $_SESSION['zone_cache'][$zoneCacheKey] ?? null;
        if (is_array($zoneCache) && isset($zoneCache['ts']) && (time() - (int)$zoneCache['ts'] < 600) && isset($zoneCache['json'])) {
          $zoneResult = ['ok' => true, 'json' => $zoneCache['json'], 'url' => $zoneCache['url'] ?? '', 'httpCode' => $zoneCache['httpCode'] ?? 200];
        } else {
          $zoneResult = callEcountZoneApi($comCode, $useTestServer);
          if (($zoneResult['ok'] ?? false) && isset($zoneResult['json'])) {
            $_SESSION['zone_cache'][$zoneCacheKey] = ['ts' => time(), 'json' => $zoneResult['json'], 'url' => $zoneResult['url'] ?? '', 'httpCode' => $zoneResult['httpCode'] ?? 200];
          }
        }
        if (!($zoneResult['ok'] ?? false)) {
          $_SESSION['fail_count'][$key] = $failCount + 1;
          $error = (string)($zoneResult['error'] ?? 'Zone 호출 오류');
        } else {
          $zone = $zoneResult['json']['Data']['ZONE'] ?? null;
          $domain = $zoneResult['json']['Data']['DOMAIN'] ?? null;
          if (!is_string($zone) || $zone === '' || !is_string($domain) || $domain === '') {
            $_SESSION['fail_count'][$key] = $failCount + 1;
            $error = 'Zone 응답에서 ZONE/DOMAIN 값을 찾지 못했습니다.';
          } elseif ($action === 'login') {
            // 2) Login 호출
            if ($userId === '' || $apiCertKey === '') {
              $error = 'USER_ID / API_CERT_KEY는 필수입니다.';
            } else {
              if ($loginPath === '' || $loginPath[0] !== '/') {
                $loginPath = '/' . ltrim($loginPath, '/');
              }
              $prefix = $useTestServer ? 'https://sboapi' : 'https://oapi';
              $loginUrl = $prefix . $zone . $domain . $loginPath;

              $allowedLan = ['ko-KR', 'en-US', 'zh-CN', 'zh-TW', 'ja-JP', 'vi-VN', 'es', 'id-ID'];
              if (!in_array($lanType, $allowedLan, true)) {
                $lanType = 'ko-KR';
              }

              // 로그인 API 스펙 기준 필수 필드 세팅
              $body = [
                'COM_CODE' => $comCode,
                'USER_ID' => $userId,
                'API_CERT_KEY' => $apiCertKey,
                'LAN_TYPE' => $lanType,
                'ZONE' => $zone,
              ];

              $loginResult = callJsonPost($loginUrl, $body);
              if (!($loginResult['ok'] ?? false)) {
                $_SESSION['fail_count'][$key] = $failCount + 1;
                $error = (string)($loginResult['error'] ?? 'Login 호출 오류');
              } else {
                // 응답 JSON에 Error가 존재하거나 Status가 200이 아니면 실패로 카운트
                $status = $loginResult['json']['Status'] ?? null;
                $hasErr = $loginResult['json']['Error'] ?? null;
                if ((string)$status !== '200' || $hasErr) {
                  $_SESSION['fail_count'][$key] = $failCount + 1;
                }

                // 성공 시 SESSION_ID를 세션에 보관(선택)
                $sessionIdFromApi = $loginResult['json']['Data']['Datas']['SESSION_ID'] ?? null;
                if (is_string($sessionIdFromApi) && $sessionIdFromApi !== '') {
                  $_SESSION['ecount_session_id'][$key] = $sessionIdFromApi;
                }
              }
            }
          } elseif ($action === 'saleorder') {
            // 3) 주문서 저장(SaveSaleOrder) 호출
            $sessionIdFromSession = (string)($_SESSION['ecount_session_id'][$key] ?? '');
            if ($sessionId === '' && $sessionIdFromSession !== '') {
              $sessionId = $sessionIdFromSession;
            }

            // erpdb.php 등 외부 화면에서 호출 시, WH_CD를 세션에 저장/재사용 가능하게 함
            $whCdFromSession = (string)($_SESSION['ecount_wh_cd'][$key] ?? '');
            if ($whCd === '' && $whCdFromSession !== '') {
              $whCd = $whCdFromSession;
            }
            if ($whCd !== '') {
              $_SESSION['ecount_wh_cd'][$key] = $whCd;
            }

            // 만약 폼에서 로그인 자격(user_id/api_cert_key)이 함께 전달되면
            // 같은 요청 내에서 서버가 로그인 호출을 수행해 SESSION_ID를 받아오도록 함
            if ($sessionId === '' && $userId !== '' && $apiCertKey !== '') {
              if ($loginPath === '' || $loginPath[0] !== '/') {
                $loginPath = '/' . ltrim($loginPath, '/');
              }
              $prefix = $useTestServer ? 'https://sboapi' : 'https://oapi';
              $loginUrl = $prefix . $zone . $domain . $loginPath;

              $allowedLan = ['ko-KR', 'en-US', 'zh-CN', 'zh-TW', 'ja-JP', 'vi-VN', 'es', 'id-ID'];
              if (!in_array($lanType, $allowedLan, true)) {
                $lanType = 'ko-KR';
              }

              $loginBody = [
                'COM_CODE' => $comCode,
                'USER_ID' => $userId,
                'API_CERT_KEY' => $apiCertKey,
                'LAN_TYPE' => $lanType,
                'ZONE' => $zone,
              ];

              $loginResult = callJsonPost($loginUrl, $loginBody);
              if (!($loginResult['ok'] ?? false)) {
                $_SESSION['fail_count'][$key] = $failCount + 1;
                $error = (string)($loginResult['error'] ?? 'Login 호출 오류');
              } else {
                $status = $loginResult['json']['Status'] ?? null;
                $hasErr = $loginResult['json']['Error'] ?? null;
                if ((string)$status !== '200' || $hasErr) {
                  $_SESSION['fail_count'][$key] = $failCount + 1;
                }

                $sessionIdFromApi = $loginResult['json']['Data']['Datas']['SESSION_ID'] ?? null;
                if (is_string($sessionIdFromApi) && $sessionIdFromApi !== '') {
                  $_SESSION['ecount_session_id'][$key] = $sessionIdFromApi;
                  $sessionId = $sessionIdFromApi;
                }
              }
            }

            if ($sessionId === '') {
              $error = 'SESSION_ID가 필요합니다. (먼저 Login API를 호출해서 SESSION_ID를 받으세요)';
            } elseif ($cust === '' || $whCd === '') {
              $error = '필수값(CUST, WH_CD)을 입력해 주세요.';
            } elseif (!preg_match('/^\d{1,4}$/', $uploadSerNo)) {
              $error = 'UPLOAD_SER_NO는 숫자 1~4자리로 입력해 주세요.';
            } else {
              if ($ioDate === '') {
                $ioDate = date('Ymd');
              }

              // 추가 품목(JSON 배열) 먼저 파싱: 첫 행을 기본 품목으로 사용할 수 있게 함
              $items = null;
              if (trim($saleOrderItemsJson) !== '') {
                $items = json_decode($saleOrderItemsJson, true);
              }

              $baseBulkFromItems = null;
              if (is_array($items) && count($items) > 0) {
                $first = $items[0];
                if (is_array($first) && array_key_exists('BulkDatas', $first) && is_array($first['BulkDatas'])) {
                  $baseBulkFromItems = $first['BulkDatas'];
                } elseif (is_array($first)) {
                  $baseBulkFromItems = $first;
                }
              }

              // 기본 품목(필수: PROD_CD, QTY)은 상단 입력 또는 추가 품목 첫 행에서 가져옴
              $baseProd = $prodCd;
              $baseQty = $qty;
              if (($baseProd === '' || $baseQty === '') && is_array($baseBulkFromItems)) {
                $candidateProd = $baseBulkFromItems['PROD_CD'] ?? '';
                $candidateQty = $baseBulkFromItems['QTY'] ?? '';
                if (is_string($candidateProd) && trim($candidateProd) !== '' && $candidateQty !== '' && $candidateQty !== null) {
                  $baseProd = trim($candidateProd);
                  $baseQty = is_string($candidateQty) ? trim($candidateQty) : (string)$candidateQty;
                }
              }

              if ($baseProd === '' || $baseQty === '') {
                $error = '필수값(PROD_CD, QTY)을 입력해 주세요. (또는 추가 품목 첫 행에 입력)';
              } elseif (!is_numeric($baseQty) || (float)$baseQty <= 0) {
                $error = 'QTY는 0보다 큰 숫자로 입력해 주세요.';
              }

              if ($error) {
                // fallthrough
              } else {

              $prefix = $useTestServer ? 'https://sboapi' : 'https://oapi';
              $orderUrl = $prefix . $zone . $domain . '/OAPI/V2/SaleOrder/SaveSaleOrder?SESSION_ID=' . rawurlencode($sessionId);

              // 필수값을 앞쪽에 배치
              $bulkDatas = [
                'UPLOAD_SER_NO' => $uploadSerNo,
                'CUST' => $cust,
                'WH_CD' => $whCd,
                'PROD_CD' => $baseProd,
                'QTY' => $baseQty,
                'IO_DATE' => $ioDate,
              ];

              // 첫 행(추가 품목)에서 기본 품목의 선택값을 같이 가져오고 싶을 때(행별 입력 우선)
              if (is_array($baseBulkFromItems)) {
                $rowPickKeys = ['PROD_DES','SIZE_DES','PRICE','SUPPLY_AMT','VAT_AMT','REMARKS'];
                foreach ($rowPickKeys as $rk) {
                  if (!array_key_exists($rk, $bulkDatas) && array_key_exists($rk, $baseBulkFromItems)) {
                    $rv = $baseBulkFromItems[$rk];
                    if ($rv !== '' && $rv !== null) {
                      $bulkDatas[$rk] = $rv;
                    }
                  }
                }
              }

              // 선택값(입력된 것만 추가)
              $optionalMap = [
                'CUST_DES' => $custDes,
                'EMP_CD' => $empCd,
                'IO_TYPE' => $ioType,
                'EXCHANGE_TYPE' => $exchangeType,
                'EXCHANGE_RATE' => $exchangeRate,
                'PJT_CD' => $pjtCd,
                'DOC_NO' => $docNo,
                'TTL_CTT' => $ttlCtt,
                'REF_DES' => $refDes,
                'COLL_TERM' => $collTerm,
                'AGREE_TERM' => $agreeTerm,
                'TIME_DATE' => $timeDate,
                'REMARKS_WIN' => $remarksWin,
                'U_MEMO1' => $uMemo1,
                'U_MEMO2' => $uMemo2,
                'U_MEMO3' => $uMemo3,
                'U_MEMO4' => $uMemo4,
                'U_MEMO5' => $uMemo5,
                'PROD_DES' => $prodDes,
                'SIZE_DES' => $sizeDes,
                'UQTY' => $uqty,
                'PRICE' => $price,
                'USER_PRICE_VAT' => $userPriceVat,
                'SUPPLY_AMT' => $supplyAmt,
                'SUPPLY_AMT_F' => $supplyAmtF,
                'VAT_AMT' => $vatAmt,
                'ITEM_TIME_DATE' => $itemTimeDate,
                'REMARKS' => $remarks,
                'ITEM_CD' => $itemCd,
              ];
              foreach ($optionalMap as $k => $v) {
                if (is_string($v) && $v !== '') {
                  if (!array_key_exists($k, $bulkDatas)) {
                    $bulkDatas[$k] = $v;
                  }
                }
              }

              // 추가 필드(JSON) 병합(필수값은 덮어쓰지 않음)
              $extra = null;
              if (trim($bulkExtraJson) !== '') {
                $extra = json_decode($bulkExtraJson, true);
              }
              if (is_array($extra)) {
                foreach ($extra as $k => $v) {
                  if (!array_key_exists((string)$k, $bulkDatas)) {
                    $bulkDatas[(string)$k] = $v;
                  }
                }
              }

              $saleOrderList = [
                ['BulkDatas' => $bulkDatas],
              ];

              // 여러 품목/전표를 한 번에 보내고 싶으면 JSON 배열을 추가로 받을 수 있게 함
              // 입력 예)
              // [
              //   {"PROD_CD":"00002","QTY":"2"},
              //   {"BulkDatas":{"PROD_CD":"00003","QTY":"1","UPLOAD_SER_NO":"1"}}
              // ]
              if (is_array($items)) {
                foreach ($items as $idx => $item) {
                  // 첫 행을 기본 품목으로 사용한 경우, 중복 추가 방지
                  if ($idx === 0 && ($prodCd === '' || $qty === '')) {
                    // 기본 품목을 상단에서 입력하지 않았고, 첫 행에서 가져온 케이스
                    // (상단 입력이 있으면 첫 행은 그대로 추가 품목으로 처리)
                    continue;
                  }

                  $itemBulk = null;
                  if (is_array($item) && array_key_exists('BulkDatas', $item) && is_array($item['BulkDatas'])) {
                    $itemBulk = $item['BulkDatas'];
                  } elseif (is_array($item)) {
                    $itemBulk = $item;
                  }

                  if (!is_array($itemBulk)) {
                    continue;
                  }

                  // 기본값(전표 묶음/거래처/창고/일자) 보완
                  $defaults = [
                    'UPLOAD_SER_NO' => $uploadSerNo,
                    'CUST' => $cust,
                    'WH_CD' => $whCd,
                    'IO_DATE' => $ioDate,
                  ];
                  foreach ($defaults as $dk => $dv) {
                    if (!array_key_exists($dk, $itemBulk) || $itemBulk[$dk] === '' || $itemBulk[$dk] === null) {
                      $itemBulk[$dk] = $dv;
                    }
                  }

                  // 각 라인 최소 필수(품목/수량)
                  $lineProd = $itemBulk['PROD_CD'] ?? '';
                  $lineQty = $itemBulk['QTY'] ?? '';
                  if (!is_string($lineProd) || trim($lineProd) === '' || $lineQty === '' || $lineQty === null) {
                    continue;
                  }

                  // 추가: 첫 행이 상단 기본품목과 동일하면 중복 추가 방지
                  if ($idx === 0 && ($baseProd !== '' || $baseQty !== '')) {
                    $baseProdTrim = trim((string)$baseProd);
                    $baseQtyStr = (string)$baseQty;
                    if ($baseProdTrim !== '' && trim((string)$lineProd) === $baseProdTrim && (string)$lineQty === $baseQtyStr) {
                      continue;
                    }
                  }

                  $saleOrderList[] = ['BulkDatas' => $itemBulk];
                }
              }

              $body = [
                'SaleOrderList' => $saleOrderList,
              ];
              // 디버그: 전송할 SaleOrder 페이로드를 파일에 저장
              @file_put_contents(__DIR__ . '/saleorder_debug.json', json_encode($body, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

              $saleOrderResult = callJsonPost($orderUrl, $body);
              if (!($saleOrderResult['ok'] ?? false)) {
                $_SESSION['fail_count'][$key] = $failCount + 1;
                $error = (string)($saleOrderResult['error'] ?? '주문서 API 호출 오류');
              } else {
                $status = $saleOrderResult['json']['Status'] ?? null;
                $hasErr = $saleOrderResult['json']['Error'] ?? null;
                if ((string)$status !== '200' || $hasErr) {
                  $_SESSION['fail_count'][$key] = $failCount + 1;
                }
              }
              }
            }
          }
        }
      }
    }
  }
}
?>

<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ECOUNT Zone API 테스트</title>
</head>
<body style="max-width: 1200px; margin: auto; font-family: Arial, sans-serif; padding: 20px;">
  <h1>Zone API  - 26 03 25 ㅁㅁ</h1>
  <div>POST /OAPI/V2/Zone, Content-Type: application/json</div>

  <form method="post">
    <input type="hidden" name="action" value="zone" />
    <div class="row">
      <label for="env">서버</label>
      <select id="env" name="env">
        <option value="test" <?= $env === 'test' ? 'selected' : '' ?>>테스트(sboapi)</option>
        <option value="prod" <?= $env === 'prod' ? 'selected' : '' ?>>실서버(oapi)</option>
      </select>
    </div>
    <div class="row">
      <label for="com_code">COM_CODE</label>
      <input id="com_code" name="com_code" value="608196" placeholder="회사코드(숫자)" required />
    </div>
    <div class="row">
      <button type="submit">Zone 조회</button>
    </div>
  </form>

  <?php if ($error): ?>
    <div>
      <strong>오류</strong><br />
      <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
    </div>
  <?php endif; ?>

  <?php if ($zoneResult && ($zoneResult['ok'] ?? false)): ?>
    <h2>결과</h2>
    <div>
      <div><strong>요청 URL</strong>: <?= htmlspecialchars((string)$zoneResult['url'], ENT_QUOTES, 'UTF-8') ?></div>
      <div><strong>HTTP 코드</strong>: <?= (int)$zoneResult['httpCode'] ?></div>
      <?php
        $zone = $zoneResult['json']['Data']['ZONE'] ?? null;
        $domain = $zoneResult['json']['Data']['DOMAIN'] ?? null;
        $loginBase = (is_string($zone) && is_string($domain) && $zone !== '' && $domain !== '')
          ? ('https://oapi' . $zone . $domain)
          : null;
      ?>
      <?php if ($loginBase): ?>
        <div><strong>로그인 API 베이스 예시</strong>: <?= htmlspecialchars($loginBase, ENT_QUOTES, 'UTF-8') ?></div>
      <?php endif; ?>
    </div>

    <h3>Response JSON</h3>
    <pre><?php
      if (is_array($zoneResult['json'])) {
        echo htmlspecialchars(
          json_encode($zoneResult['json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
          ENT_QUOTES,
          'UTF-8'
        );
      } else {
        echo htmlspecialchars((string)$zoneResult['raw'], ENT_QUOTES, 'UTF-8');
        if (!empty($zoneResult['jsonError'])) {
          echo "\n\n(JSON 파싱 오류: " . htmlspecialchars((string)$zoneResult['jsonError'], ENT_QUOTES, 'UTF-8') . ")";
        }
      }
    ?></pre>
  <?php endif; ?>

  <hr />

  <h1>Login API</h1>
  <div>Zone 결과(ZONE/DOMAIN)를 이용해 로그인 URL을 구성합니다.</div>
  <form method="post">
    <input type="hidden" name="action" value="login" />
    <div class="row">
      <label for="env2">서버</label>
      <select id="env2" name="env">
        <option value="test" <?= $env === 'test' ? 'selected' : '' ?>>테스트(sboapi)</option>
        <option value="prod" <?= $env === 'prod' ? 'selected' : '' ?>>실서버(oapi)</option>
      </select>
    </div>
    <div class="row">
      <label for="com_code2">COM_CODE</label>
      <input id="com_code2" name="com_code" value="608196" placeholder="회사코드(숫자)" required />
    </div>
    <div class="row">
      <label for="user_id">USER_ID</label>
      <input id="user_id" name="user_id" value="추민식" required />
    </div>
    <div class="row">
      <label for="api_cert_key">API_CERT_KEY</label>
      <input id="api_cert_key" name="api_cert_key" value="44d80dd7845df4575943c5c7baf7e3e759" required />
    </div>
    <div class="row">
      <label for="lan_type">LAN_TYPE</label>
      <select id="lan_type" name="lan_type">
        <?php
          $lanOptions = ['ko-KR','en-US','zh-CN','zh-TW','ja-JP','vi-VN','es','id-ID'];
          foreach ($lanOptions as $opt) {
            $sel = $lanType === $opt ? 'selected' : '';
            echo '<option value="' . htmlspecialchars($opt, ENT_QUOTES, 'UTF-8') . '" ' . $sel . '>' . htmlspecialchars($opt, ENT_QUOTES, 'UTF-8') . '</option>';
          }
        ?>
      </select>
    </div>
    <div class="row">
      <label for="login_path">Login Path</label>
      <input id="login_path" name="login_path" value="<?= htmlspecialchars($loginPath, ENT_QUOTES, 'UTF-8') ?>" />
    </div>
    <div class="row">
      <button type="submit">Login 호출</button>
    </div>
  </form>

  <?php if ($loginResult && ($loginResult['ok'] ?? false)): ?>
    <h2>Login 결과</h2>
    <div>
      <div><strong>요청 URL</strong>: <?= htmlspecialchars((string)$loginResult['url'], ENT_QUOTES, 'UTF-8') ?></div>
      <div><strong>HTTP 코드</strong>: <?= (int)$loginResult['httpCode'] ?></div>
      <?php
        $sid = $loginResult['json']['Data']['Datas']['SESSION_ID'] ?? null;
        if (is_string($sid) && $sid !== '') {
          echo '<div><strong>SESSION_ID</strong>: ' . htmlspecialchars($sid, ENT_QUOTES, 'UTF-8') . '</div>';
        }
      ?>
    </div>
    <h3>Request JSON</h3>
    <pre><?php
      echo htmlspecialchars(
        json_encode($loginResult['requestBody'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        ENT_QUOTES,
        'UTF-8'
      );
    ?></pre>
    <h3>Response JSON</h3>
    <pre><?php
      if (is_array($loginResult['json'])) {
        echo htmlspecialchars(
          json_encode($loginResult['json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
          ENT_QUOTES,
          'UTF-8'
        );
      } else {
        echo htmlspecialchars((string)$loginResult['raw'], ENT_QUOTES, 'UTF-8');
        if (!empty($loginResult['jsonError'])) {
          echo "\n\n(JSON 파싱 오류: " . htmlspecialchars((string)$loginResult['jsonError'], ENT_QUOTES, 'UTF-8') . ")";
        }
      }
    ?></pre>
  <?php endif; ?>

  <hr />

  <h1>주문서 API (SaveSaleOrder)</h1>
  <div>POST /OAPI/V2/SaleOrder/SaveSaleOrder?SESSION_ID=..., Content-Type: application/json</div>
  <?php
    $keyForView = $env !== 'prod' ? 'test' : 'prod';
    $sidFromSession = (string)($_SESSION['ecount_session_id'][$keyForView] ?? '');
    if ($sessionId === '' && $sidFromSession !== '') {
      $sessionId = $sidFromSession;
    }
  ?>
  <form method="post">
    <input type="hidden" name="action" value="saleorder" />
    <div class="row">
      <label for="env3">서버</label>
      <select id="env3" name="env">
        <option value="test" <?= $env === 'test' ? 'selected' : '' ?>>테스트(sboapi)</option>
        <option value="prod" <?= $env === 'prod' ? 'selected' : '' ?>>실서버(oapi)</option>
      </select>
    </div>
    <div class="row">
      <label for="com_code3" title="이카운트 ERP 로그인할 때 사용하는 회사코드">COM_CODE (회사코드)</label>
      <input id="com_code3" name="com_code" value="608196" required />
    </div>
    <div class="row">
      <label for="session_id" title="로그인 API 호출 후 받은 SESSION_ID(세션ID)">SESSION_ID (세션ID)</label>
      <input id="session_id" name="session_id" value="<?= htmlspecialchars($sessionId, ENT_QUOTES, 'UTF-8') ?>" required />
    </div>

    <h3>필수값</h3>
    <div class="row">
      <label for="upload_ser_no" title="순번(최대 4자). 동일 전표로 묶을 경우 동일 순번 사용">UPLOAD_SER_NO (순번)</label>
      <input id="upload_ser_no" name="upload_ser_no" value="<?= htmlspecialchars($uploadSerNo, ENT_QUOTES, 'UTF-8') ?>" required />
    </div>
    <div class="row">
      <label for="cust" title="주문거래처코드(ERP 거래처코드)">CUST (거래처코드)</label>
      <input id="cust" name="cust" value="<?= htmlspecialchars($cust, ENT_QUOTES, 'UTF-8') ?>" placeholder="업체명"  required />
    </div>
    <div class="row">
      <label for="wh_cd" title="출하창고코드(ERP 창고코드)">WH_CD (출하창고)</label>
      <input id="wh_cd" name="wh_cd" value="100" required />
    </div>

    <h3>선택값</h3>
    <div class="row">
      <label for="io_date" title="주문일자(YYYYMMDD). 미입력 시 오늘">IO_DATE (일자)</label>
      <input id="io_date" name="io_date" value="<?= htmlspecialchars($ioDate, ENT_QUOTES, 'UTF-8') ?>" placeholder="YYYYMMDD" />
    </div>

    <div class="row">
      <label for="cust_des" title="주문거래처명(ERP 거래처명)">CUST_DES (거래처명)</label>
      <input id="cust_des" name="cust_des" value="<?= htmlspecialchars($custDes, ENT_QUOTES, 'UTF-8') ?>"/>
    </div>
    <div class="row">
      <label for="emp_cd" title="담당자코드(ERP 담당자코드)">EMP_CD (담당자)</label>
      <input id="emp_cd" name="emp_cd" value="00098" />
    </div>
    <div class="row">
      <label for="time_date" title="납기일자(YYYYMMDD)">TIME_DATE (납기일자)</label>
      <input id="time_date" name="time_date" value="<?= htmlspecialchars($timeDate, ENT_QUOTES, 'UTF-8') ?>" placeholder="YYYYMMDD" />
    </div>
    <div class="row">
      <label for="remarks_win" title="검색창내용 (STRING(50)). 입력화면설정에서 필수로 지정된 경우 반드시 입력해야 함. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">REMARKS_WIN (검색창내용)</label>
      <input id="remarks_win" name="remarks_win" maxlength="50" value="<?= htmlspecialchars($remarksWin, ENT_QUOTES, 'UTF-8') ?>" />
    </div>

    <div class="row">
      <label for="u_memo1" title="문자형식1 (STRING(6)). 입력화면설정 > 상단탭 > 항목설정한 경우에 입력. 필수로 지정된 경우 반드시 입력. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">U_MEMO1 (문자형식1)</label>
      <input id="u_memo1" name="u_memo1" maxlength="6" value="<?= htmlspecialchars($uMemo1, ENT_QUOTES, 'UTF-8') ?>" placeholder="배송메모" />
    </div>
    <div class="row">
      <label for="u_memo2" title="문자형식2 (STRING(200)). 입력화면설정 > 상단탭 > 항목설정한 경우에 입력. 필수로 지정된 경우 반드시 입력. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">U_MEMO2 (문자형식2)</label>
      <input id="u_memo2" name="u_memo2" maxlength="200" value="<?= htmlspecialchars($uMemo2, ENT_QUOTES, 'UTF-8') ?>" placeholder="받는 사람" />
    </div>
    <div class="row">
      <label for="u_memo3" title="문자형식3 (STRING(200)). 입력화면설정 > 상단탭 > 항목설정한 경우에 입력. 필수로 지정된 경우 반드시 입력. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">U_MEMO3 (문자형식3)</label>
      <input id="u_memo3" name="u_memo3" maxlength="200" value="<?= htmlspecialchars($uMemo3, ENT_QUOTES, 'UTF-8') ?>" placeholder="연락처"/>
    </div>
    <div class="row">
      <label for="u_memo4" title="문자형식4 (STRING(200)). 입력화면설정 > 상단탭 > 항목설정한 경우에 입력. 필수로 지정된 경우 반드시 입력. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">U_MEMO4 (문자형식4)</label>
      <input id="u_memo4" name="u_memo4" maxlength="200" value="<?= htmlspecialchars($uMemo4, ENT_QUOTES, 'UTF-8') ?>" placeholder="택배주소" />
    </div>
    <div class="row">
      <label for="u_memo5" title="문자형식5 (STRING(200)). 입력화면설정 > 상단탭 > 항목설정한 경우에 입력. 필수로 지정된 경우 반드시 입력. 경로: 재고1 > 영업관리 > 주문서입력 > 옵션 > 입력화면설정 > 상단탭">U_MEMO5 (문자형식5)</label>
      <input id="u_memo5" name="u_memo5" maxlength="200" value="<?= htmlspecialchars($uMemo5, ENT_QUOTES, 'UTF-8') ?>" />
    </div>



    <?php
      $prefillExtraItems = [];
      $itemsJsonTrim = trim((string)$saleOrderItemsJson);
      if ($itemsJsonTrim !== '') {
        $decodedItems = json_decode($itemsJsonTrim, true);
        if (is_array($decodedItems)) {
          $prefillExtraItems = $decodedItems;
        }
      }
    ?>
    <div class="row">
      <label title="+ 버튼으로 품목(배열) 행 추가, - 버튼으로 행 삭제. 입력값은 자동으로 JSON 배열로 변환되어 전송됩니다.">추가 품목(배열)</label>
      <input type="hidden" id="saleorder_items_json" name="saleorder_items_json" value="<?= htmlspecialchars($saleOrderItemsJson, ENT_QUOTES, 'UTF-8') ?>" />

      <table id="saleorder_items_table" border="1" cellpadding="6" cellspacing="0">
        <thead>
          <tr>
            <th title="품목코드(ERP 품목코드)">PROD_CD</th>
            <th title="품목명(ERP 품목명)">PROD_DES</th>
            <th title="규격(ERP 규격)">SIZE_DES</th>
            <th title="주문수량">QTY</th>
            <th title="단가(선택)">PRICE</th>
            <th title="공급가액(원화)">SUPPLY_AMT</th>
            <th title="부가세">VAT_AMT</th>
            <th title="적요">REMARKS</th>
            <th title="삭제">-</th>
          </tr>
        </thead>
        <tbody id="saleorder_items_body">
          <?php if (!empty($prefillExtraItems)): ?>
            <?php foreach ($prefillExtraItems as $it): ?>
              <?php
                $row = $it;
                if (is_array($it) && array_key_exists('BulkDatas', $it) && is_array($it['BulkDatas'])) {
                  $row = $it['BulkDatas'];
                }

                $p = is_array($row) ? (string)($row['PROD_CD'] ?? '') : '';
                $pd = is_array($row) ? (string)($row['PROD_DES'] ?? '') : '';
                $sd = is_array($row) ? (string)($row['SIZE_DES'] ?? '') : '';
                $q = is_array($row) ? (string)($row['QTY'] ?? '') : '';
                $pr = is_array($row) ? (string)($row['PRICE'] ?? '') : '';
                $sa = is_array($row) ? (string)($row['SUPPLY_AMT'] ?? '') : '';
                $va = is_array($row) ? (string)($row['VAT_AMT'] ?? '') : '';
                $rm = is_array($row) ? (string)($row['REMARKS'] ?? '') : '';
              ?>
              <tr>
                <td><input type="text" value="<?= htmlspecialchars($p, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 00002" /></td>
                <td><input type="text" value="<?= htmlspecialchars($pd, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 상품명" /></td>
                <td><input type="text" value="<?= htmlspecialchars($sd, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 규격" /></td>
                <td><input type="text" value="<?= htmlspecialchars($q, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 2" /></td>
                <td><input type="text" value="<?= htmlspecialchars($pr, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 1000" /></td>
                <td><input type="text" value="<?= htmlspecialchars($sa, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 2000" /></td>
                <td><input type="text" value="<?= htmlspecialchars($va, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 200" /></td>
                <td><input type="text" value="<?= htmlspecialchars($rm, ENT_QUOTES, 'UTF-8') ?>" placeholder="예: 적요" /></td>
                <td><button type="button" class="saleorder-item-remove" title="이 행 삭제">-</button></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
      <div style="margin-top:8px;">
        <button type="button" id="saleorder_item_add" title="품목 행 추가">+ 품목 추가</button>
      </div>
    </div>

    <div class="row">
      <button type="submit">주문서 저장 호출</button>
    </div>
  </form>

  <script>
    (function () {
      function qs(id) {
        return document.getElementById(id);
      }

      var body = qs('saleorder_items_body');
      var addBtn = qs('saleorder_item_add');
      var hidden = qs('saleorder_items_json');
      if (!body || !addBtn || !hidden) return;

      function syncToHidden() {
        var rows = body.querySelectorAll('tr');
        var arr = [];
        for (var i = 0; i < rows.length; i++) {
          var inputs = rows[i].querySelectorAll('input');
          var prod = inputs[0] ? (inputs[0].value || '').trim() : '';
          var prodDes = inputs[1] ? (inputs[1].value || '').trim() : '';
          var sizeDes = inputs[2] ? (inputs[2].value || '').trim() : '';
          var qty = inputs[3] ? (inputs[3].value || '').trim() : '';
          var price = inputs[4] ? (inputs[4].value || '').trim() : '';
          var supplyAmt = inputs[5] ? (inputs[5].value || '').trim() : '';
          var vatAmt = inputs[6] ? (inputs[6].value || '').trim() : '';
          var remarks = inputs[7] ? (inputs[7].value || '').trim() : '';

          if (!prod && !prodDes && !sizeDes && !qty && !price && !supplyAmt && !vatAmt && !remarks) continue;

          var item = {};
          if (prod) item.PROD_CD = prod;
          if (prodDes) item.PROD_DES = prodDes;
          if (sizeDes) item.SIZE_DES = sizeDes;
          if (qty) item.QTY = qty;
          if (price) item.PRICE = price;
          if (supplyAmt) item.SUPPLY_AMT = supplyAmt;
          if (vatAmt) item.VAT_AMT = vatAmt;
          if (remarks) item.REMARKS = remarks;
          arr.push(item);
        }

        hidden.value = arr.length ? JSON.stringify(arr) : '';
      }

      function bindRow(row) {
        var inputs = row.querySelectorAll('input');
        for (var i = 0; i < inputs.length; i++) {
          inputs[i].addEventListener('input', syncToHidden);
        }

        var rm = row.querySelector('.saleorder-item-remove');
        if (rm) {
          rm.addEventListener('click', function () {
            if (row.parentNode) row.parentNode.removeChild(row);
            syncToHidden();
          });
        }
      }

      function addRow(p, pd, sd, q, pr, sa, va, rm) {
        var tr = document.createElement('tr');

        var td1 = document.createElement('td');
        var i1 = document.createElement('input');
        i1.type = 'text';
        i1.placeholder = '예: 00002';
        i1.value = p || '';
        td1.appendChild(i1);

        var td1b = document.createElement('td');
        var i1b = document.createElement('input');
        i1b.type = 'text';
        i1b.placeholder = '예: 상품명';
        i1b.value = pd || '';
        td1b.appendChild(i1b);

        var td1c = document.createElement('td');
        var i1c = document.createElement('input');
        i1c.type = 'text';
        i1c.placeholder = '예: 규격';
        i1c.value = sd || '';
        td1c.appendChild(i1c);

        var td2 = document.createElement('td');
        var i2 = document.createElement('input');
        i2.type = 'text';
        i2.placeholder = '예: 2';
        i2.value = q || '';
        td2.appendChild(i2);

        var td3 = document.createElement('td');
        var i3 = document.createElement('input');
        i3.type = 'text';
        i3.placeholder = '예: 1000';
        i3.value = pr || '';
        td3.appendChild(i3);

        var td3b = document.createElement('td');
        var i3b = document.createElement('input');
        i3b.type = 'text';
        i3b.placeholder = '예: 2000';
        i3b.value = sa || '';
        td3b.appendChild(i3b);

        var td3c = document.createElement('td');
        var i3c = document.createElement('input');
        i3c.type = 'text';
        i3c.placeholder = '예: 200';
        i3c.value = va || '';
        td3c.appendChild(i3c);

        var td3d = document.createElement('td');
        var i3d = document.createElement('input');
        i3d.type = 'text';
        i3d.placeholder = '예: 적요';
        i3d.value = rm || '';
        td3d.appendChild(i3d);

        var td4 = document.createElement('td');
        var b = document.createElement('button');
        b.type = 'button';
        b.className = 'saleorder-item-remove';
        b.title = '이 행 삭제';
        b.textContent = '-';
        td4.appendChild(b);

        tr.appendChild(td1);
        tr.appendChild(td1b);
        tr.appendChild(td1c);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td3b);
        tr.appendChild(td3c);
        tr.appendChild(td3d);
        tr.appendChild(td4);

        body.appendChild(tr);
        bindRow(tr);
        syncToHidden();
      }

      // 기존(서버 렌더링) 행에도 이벤트 바인딩
      var existing = body.querySelectorAll('tr');
      for (var i = 0; i < existing.length; i++) {
        bindRow(existing[i]);
      }

      addBtn.addEventListener('click', function () {
        addRow('', '', '', '', '', '', '', '');
      });

      // 최초 동기화
      syncToHidden();
    })();
  </script>

  <?php if ($saleOrderResult && ($saleOrderResult['ok'] ?? false)): ?>
    <h2>주문서 결과</h2>
    <div>
      <div><strong>요청 URL</strong>: <?= htmlspecialchars((string)$saleOrderResult['url'], ENT_QUOTES, 'UTF-8') ?></div>
      <div><strong>HTTP 코드</strong>: <?= (int)$saleOrderResult['httpCode'] ?></div>
    </div>
    <h3>Request JSON</h3>
    <pre><?php
      echo htmlspecialchars(
        json_encode($saleOrderResult['requestBody'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        ENT_QUOTES,
        'UTF-8'
      );
    ?></pre>
    <h3>Response JSON</h3>
    <pre><?php
      if (is_array($saleOrderResult['json'])) {
        echo htmlspecialchars(
          json_encode($saleOrderResult['json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
          ENT_QUOTES,
          'UTF-8'
        );
      } else {
        echo htmlspecialchars((string)$saleOrderResult['raw'], ENT_QUOTES, 'UTF-8');
        if (!empty($saleOrderResult['jsonError'])) {
          echo "\n\n(JSON 파싱 오류: " . htmlspecialchars((string)$saleOrderResult['jsonError'], ENT_QUOTES, 'UTF-8') . ")";
        }
      }
    ?></pre>
    
    <?php
      // ResultDetails 검사: SuccessCnt가 0인 항목이 있으면 메일 전송 폼을 만들어 mailsend.php로 POST
      $shouldTriggerMail = false;
      $mailContent = '';
      if (is_array($saleOrderResult['json'])) {
        // 응답 JSON 어디에나 있는 SuccessCnt=0을 찾기 위해 재귀 탐색
        $find_success_cnt = function ($arr) use (&$find_success_cnt) {
          if (!is_array($arr)) return null;
          if (array_key_exists('SuccessCnt', $arr)) return $arr['SuccessCnt'];
          foreach ($arr as $v) {
            if (is_array($v)) {
              $res = $find_success_cnt($v);
              if ($res !== null) return $res;
            }
          }
          return null;
        };

        $sc = $find_success_cnt($saleOrderResult['json']);
        if ($sc !== null && (int)$sc === 0) {
          $shouldTriggerMail = true;
        }
        // 디버그: 찾은 SuccessCnt 값을 로그에 남김
        $dbg = 'Found SuccessCnt=' . ($sc === null ? 'null' : (string)$sc) . "\n";
        // logging disabled: removed mail_send.log writes

        // 메일 본문으로 전달할 내용 구성
        // $mailContent = "주문서 API 전송 결과에서 SuccessCnt가 0으로 표시됩니다.\n\n";
        // $mailContent .= "요청 URL: " . ($saleOrderResult['url'] ?? '') . "\n";
        // $mailContent .= "HTTP 코드: " . ($saleOrderResult['httpCode'] ?? '') . "\n\n";
        $mailContent .= "Response JSON:\n" . json_encode($saleOrderResult['json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
      }

      if ($shouldTriggerMail):
        // 서버에서 PHPMailer로 직접 발송 시도
        $sendResult = false;
        $sendError = '';
        $to = 'sodamedia@daum.net';
        $subject = 'ECOUNT 주문 전송 실패';
        $body = $mailContent;

        // PHPMailer 사용 가능하면 SMTP로 발송
        if (file_exists(__DIR__ . '/vendor/autoload.php')) {
          require_once __DIR__ . '/vendor/autoload.php';
          try {
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = $smtpHost;
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUser;
            $mail->Password = $smtpPass;
            $mail->SMTPSecure = $smtpSecure;
            $mail->Port = $smtpPort;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom($mailFrom, $mailFromName);
            $mail->addAddress($to);

            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->isHTML(false);

            $mail->send();
            $sendResult = true;
            // Flow API로도 동시에 전송 (비동기적 호출 로그 남김)
            $flowTitle = $subject;
            $flowContents = $body;
            try {
              $flowUrl = 'https://api.flow.team/v1/posts/projects/2828992';
              $flowPayload = json_encode(['registerId' => 'palace790@gmail.com', 'title' => $flowTitle, 'contents' => $flowContents]);
              $chf = curl_init($flowUrl);
              curl_setopt_array($chf, [
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                  'Content-Type: application/json',
                  'x-flow-api-key: ' . $flowApiKey,
                ],
                CURLOPT_POSTFIELDS => $flowPayload,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_TIMEOUT => 10,
              ]);
              $flowRaw = curl_exec($chf);
              $flowErr = curl_error($chf);
              $flowHttp = (int)curl_getinfo($chf, CURLINFO_HTTP_CODE);
              curl_close($chf);
              // logging disabled: removed mail_send.log writes
            } catch (\Throwable $e) { /* logging disabled */ }
          } catch (Exception $e) {
            $sendError = $e->getMessage();
            $sendResult = false;
          }
        } else {
          // PHPMailer 미설치 시 PHP mail()로 시도
          $encodedSubject = mb_encode_mimeheader($subject, 'UTF-8');
          $headers = "From: " . $mailFrom . "\r\n";
          $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
          $sent = @mail($to, $encodedSubject, $body, $headers);
          $sendResult = (bool)$sent;
          if (!$sendResult) $sendError = 'mail() 전송 실패';
          // flow 동시 전송 (mail() 경로)
          $flowTitle = $subject;
          $flowContents = $body;
          try {
            $flowUrl = 'https://api.flow.team/v1/posts/projects/2828992';
            $flowPayload = json_encode(['registerId' => 'palace790@gmail.com', 'title' => $flowTitle, 'contents' => $flowContents]);
              $chf = curl_init($flowUrl);
              curl_setopt_array($chf, [
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                  'Content-Type: application/json',
                  'x-flow-api-key: ' . $flowApiKey,
                ],
                CURLOPT_POSTFIELDS => $flowPayload,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_TIMEOUT => 10,
              ]);
            $flowRaw = curl_exec($chf);
            $flowErr = curl_error($chf);
            $flowHttp = (int)curl_getinfo($chf, CURLINFO_HTTP_CODE);
            curl_close($chf);
            // logging disabled: removed mail_send.log writes
          } catch (\Throwable $e) { /* logging disabled */ }
        }
        // 로컬 로그(선택): 발송 결과를 파일에 남김
        $log = date('c') . " | to={$to} | result=" . ($sendResult ? 'ok' : 'fail') . " | err=" . ($sendError ?: '-') . "\n";
        // logging disabled: removed mail_send.log writes
      endif;
    ?>
  <?php endif; ?>

  <?php
    // 디버그: 메일 발송 시도 결과 표시 (개발 중에만 사용)
    if (!empty($shouldTriggerMail)) {
      echo '<div style="padding:8px;border:1px solid #c00;background:#fee;margin-top:12px;">';
      echo '<strong>자동 메일 전송 시도:</strong> ' . ($sendResult ? '성공' : '실패') . '<br/>';
      if (!empty($sendError)) {
        echo '오류: ' . htmlspecialchars($sendError, ENT_QUOTES, 'UTF-8') . '<br/>';
      }
      // 로그 파일 경고/링크 제거 per request
      echo '</div>';
    }
  ?>

  <p>
    참고: 문서 기준으로 동일 IP에서 Zone/Login 실패가 반복되면 차단될 수 있어, 이 페이지는 세션 기준으로 호출 간격을 제한합니다.
  </p>

  
  <hr />

  

  
<section>
  
<form id="flow-form" method="post">
  <input type="text" id="title" name="title" value="<?= htmlspecialchars($flowTitle, ENT_QUOTES, 'UTF-8') ?>">
  <input type="text" id="contents" name="contents" value="<?= htmlspecialchars($flowContents, ENT_QUOTES, 'UTF-8') ?>">
  <button type="submit" id="fsend">전송</button>
</form>

  <script>
    const options = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
      'x-flow-api-key': '<?= htmlspecialchars($flowApiKey, ENT_QUOTES, 'UTF-8') ?>',
  },
  body: JSON.stringify({
    registerId: 'palace790@gmail.com',
    title: document.getElementById('title').value,
    contents: document.getElementById('contents').value,
  }),
}
fetch('https://api.flow.team/v1/posts/projects/2828992', options)
  .then(response => response.json())
  .then(response => console.log(response))
  .catch(err => console.error(err))
  </script>
</section>


</body>


</html>

