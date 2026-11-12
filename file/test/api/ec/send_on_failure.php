<?php
// send_on_failure.php
// 사용법: php send_on_failure.php [json_file] [mailsend_url]
// 예: php send_on_failure.php saleorder_debug.json http://localhost/@home/api/ec/mailsend.php

if (PHP_SAPI !== 'cli') {
    echo "이 스크립트는 CLI 전용입니다.\n";
    exit(1);
}

$jsonFile = $argv[1] ?? 'saleorder_debug.json';
$mailsendUrl = $argv[2] ?? 'http://localhost/@home/api/ec/mailsend_api.php';

if (!file_exists($jsonFile)) {
    echo "JSON 파일을 찾을 수 없음: $jsonFile\n";
    exit(1);
}

$raw = file_get_contents($jsonFile);
$data = json_decode($raw, true);
if ($data === null) {
    echo "JSON 파싱 실패\n";
    exit(1);
}

// ResultDetails 내부의 SuccessCnt 검사 (재귀적으로 검색)
function find_success_cnt($arr) {
    if (!is_array($arr)) return null;
    if (array_key_exists('SuccessCnt', $arr)) return $arr['SuccessCnt'];
    foreach ($arr as $v) {
        if (is_array($v)) {
            $res = find_success_cnt($v);
            if ($res !== null) return $res;
        }
    }
    return null;
}

$success = find_success_cnt($data);
if ($success === null) {
    echo "ResultDetails 또는 SuccessCnt를 찾을 수 없음. 스크립트 종료.\n";
    exit(0);
}

echo "SuccessCnt = $success\n";
if ((int)$success === 0) {
    $title = 'ERP 전송 실패: SuccessCnt=0';
    $content = "원본 JSON:\n" . $raw;

    // POST to mailsend.php
    $post = [
        'title' => $title,
        'content' => $content,
        'ms7' => '메일전송'
    ];

    $ch = curl_init($mailsendUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // 타임아웃 짧게 설정
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $resp = curl_exec($ch);
    $err = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($resp === false) {
        echo "mailsend.php 호출 실패: $err\n";
        exit(1);
    }

    echo "mailsend.php 응답 코드: $code\n";
    // 응답 내용 일부만 출력
    $preview = mb_substr(strip_tags($resp), 0, 1000);
    echo "응답(미리보기):\n" . $preview . "\n";
    exit(0);
} else {
    echo "성공 건이 존재합니다 (SuccessCnt != 0) — 메일 전송 없음.\n";
    exit(0);
}

?>
