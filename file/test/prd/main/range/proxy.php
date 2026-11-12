<?php
// 간단한 프록시: 허용된 호스트에서만 파일을 가져와 전달합니다.
$u = isset($_GET['u']) ? trim($_GET['u']) : '';
if(!$u){ http_response_code(400); echo 'Missing url'; exit; }
$parts = parse_url($u);
if(!$parts || !isset($parts['host'])){ http_response_code(400); echo 'Invalid url'; exit; }
$allowedHost = 'bolintechnology.com';
if(strtolower($parts['host']) !== $allowedHost){ http_response_code(403); echo 'Host not allowed'; exit; }
// fetch via cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $u);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_USERAGENT, '3ds-proxy/1.0');
$data = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE) ?: 'application/octet-stream';
$err = curl_error($ch);
curl_close($ch);
if($data === false || $httpCode < 200 || $httpCode >= 400){ http_response_code(502); echo 'Upstream fetch failed: '.($err ?: $httpCode); exit; }
header('Content-Type: '.$contentType);
// Allow caching for short time
header('Cache-Control: public, max-age=300');
echo $data;
exit;
?>