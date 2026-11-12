<?php
// 캡처 실행 엔드포인트: node js/capture.js 를 서버에서 실행해 output.png 생성
// 주의: 프로세스를 실행하는 엔드포인트이므로 반드시 관리자만 접근 가능하도록
//       서버/네트워크 단(.htaccess IP 제한, 인증 등)에서 별도로 보호해야 합니다.

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'POST 요청만 허용됩니다.']);
    exit;
}

$projectRoot = realpath(__DIR__ . '/../..');
$scriptPath = $projectRoot . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'capture.js';

if (!$projectRoot || !file_exists($scriptPath)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => '캡처 스크립트를 찾을 수 없습니다.']);
    exit;
}

// 사용자 입력을 명령어에 절대 포함하지 않음 (고정 경로만 실행)
$command = 'node ' . escapeshellarg($scriptPath) . ' 2>&1';
$descriptorSpec = [
    1 => ['pipe', 'w'],
    2 => ['pipe', 'w'],
];

$process = proc_open($command, $descriptorSpec, $pipes, $projectRoot);

if (!is_resource($process)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => '캡처 프로세스를 시작하지 못했습니다.']);
    exit;
}

$output = stream_get_contents($pipes[1]);
fclose($pipes[1]);
fclose($pipes[2]);
$exitCode = proc_close($process);

echo json_encode([
    'success' => $exitCode === 0,
    'message' => $output,
]);
