<?php
// simple proxy to forward requests to remote erpdb.php and add CORS headers
// Usage: proxy_erpdb.php?tzz=... (GET) or POST body will be forwarded

$remote = 'https://port-9000-testphp-ma6q5cjy22737d6f.sel4.cloudtype.app/test/api/ec/erpdb.php';
// 원격 주문 전송 대상
$remote_index = 'https://port-9000-testphp-ma6q5cjy22737d6f.sel4.cloudtype.app/test/api/ec/index.php';

// Build remote URL including query string
$query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
$url = $remote . ($query !== '' ? '?' . $query : '');

// Allow preflight
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin !== '') {
  header('Access-Control-Allow-Origin: ' . $origin);
  header('Access-Control-Allow-Credentials: true');
  header('Vary: Origin');
} else {
  header('Access-Control-Allow-Origin: *');
}
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  http_response_code(204);
  exit;
}

// Initialize curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Forward POST body if present
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $body = file_get_contents('php://input');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
  $forwardHeaders = [];
  if (!empty($_SERVER['CONTENT_TYPE'])) {
    $forwardHeaders[] = 'Content-Type: ' . $_SERVER['CONTENT_TYPE'];
  }
  if ($forwardHeaders) curl_setopt($ch, CURLOPT_HTTPHEADER, $forwardHeaders);
}

$resp = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE) ?: 200;
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE) ?: 'text/html; charset=UTF-8';
curl_close($ch);

if ($resp === false) {
  http_response_code(502);
  echo 'Proxy fetch error';
  exit;
}

header('Content-Type: ' . $contentType);
http_response_code($httpCode);
// 간단한 매칭 검사: GET 요청에서 tzz 파라미터가 있으면 응답 HTML 내 input[name=orderno] 값과 비교
$tzz = $_GET['tzz'] ?? null;
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $tzz) {
  $matched = false;
  $matchedOrder = '';
  libxml_use_internal_errors(true);
  $doc = new DOMDocument();
  if ($doc->loadHTML('<?xml encoding="utf-8" ?>' . $resp)) {
    $xpath = new DOMXPath($doc);
    $nodes = $xpath->query('//input[@name="orderno"]');
    foreach ($nodes as $node) {
      $val = $node->getAttribute('value');
      if (trim((string)$val) === trim((string)$tzz)) {
        $matched = true;
        $matchedOrder = $val;
        break;
      }
    }
  }
  header('X-Order-Matched: ' . ($matched ? '1' : '0'));
  if ($matched) header('X-Matched-Order: ' . $matchedOrder);
  echo $resp;
  exit;
}

// POST는 클라이언트가 전송한 폼을 받아 원격 index.php로 전달
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 안전: POST에 orderno가 없으면 거부
  $post = $_POST;
  $postedOrder = $post['orderno'] ?? null;

  if (!$postedOrder) {
    http_response_code(400);
    echo 'Missing orderno in POST data';
    exit;
  }

  // 검증: 원격 erpdb에서 tzz(=orderno) 매칭 확인 (prevent accidental 전송)
  $ch2 = curl_init($remote . '?tzz=' . urlencode($postedOrder));
  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
  $resp2 = curl_exec($ch2);
  curl_close($ch2);

  $confirmed = false;
  libxml_use_internal_errors(true);
  $doc2 = new DOMDocument();
  if ($resp2 && $doc2->loadHTML('<?xml encoding="utf-8" ?>' . $resp2)) {
    $xpath2 = new DOMXPath($doc2);
    $nodes2 = $xpath2->query('//input[@name="orderno"]');
    foreach ($nodes2 as $n) {
      if (trim($n->getAttribute('value')) === trim($postedOrder)) {
        $confirmed = true;
        break;
      }
    }
  }

  if (!$confirmed) {
    http_response_code(412);
    echo 'Order not matched; aborting send';
    exit;
  }

  // Forward to remote index.php
  $ch3 = curl_init($remote_index);
  curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch3, CURLOPT_POST, true);
  curl_setopt($ch3, CURLOPT_POSTFIELDS, http_build_query($post));
  curl_setopt($ch3, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
  $resp3 = curl_exec($ch3);
  $code3 = curl_getinfo($ch3, CURLINFO_HTTP_CODE) ?: 200;
  $ctype3 = curl_getinfo($ch3, CURLINFO_CONTENT_TYPE) ?: 'text/html; charset=UTF-8';
  curl_close($ch3);

  header('Content-Type: ' . $ctype3);
  http_response_code($code3);
  echo $resp3;
  exit;
}

// 기본: GET이면서 tzz가 없거나 다른 메소드인 경우 원본 응답 그대로
echo $resp;

?>
