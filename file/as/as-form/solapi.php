<?php
// 솔라피(Solapi) 카카오 알림톡 발송 헬퍼
if (!defined('SOLAPI_API_KEY')) {
    require_once __DIR__ . '/config.php';
}

/**
 * 카카오 알림톡 발송
 * @param string $phone 수신자 연락처 (숫자만 또는 하이픈 포함 모두 허용)
 * @param array $variables 템플릿 변수 (예: ['#{고객명}' => '홍길동'])
 * @return array ['success' => bool, 'response' => string, 'error' => string|null]
 */
function sendSolapiAlimtalk(string $phone, array $variables): array
{
    $to = preg_replace('/\D/', '', $phone);
    if ($to === '') {
        return ['success' => false, 'response' => '', 'error' => '수신자 연락처가 비어있습니다.'];
    }

    $date = date('c');
    $salt = bin2hex(random_bytes(16));
    $signature = hash_hmac('sha256', $date . $salt, SOLAPI_API_SECRET);

    $body = json_encode([
        'message' => [
            'to' => $to,
            'from' => SOLAPI_SENDER_PHONE,
            'kakaoOptions' => [
                'pfId' => SOLAPI_PF_ID,
                'templateId' => SOLAPI_TEMPLATE_ID,
                'variables' => $variables,
            ],
        ],
    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    if ($body === false) {
        return ['success' => false, 'response' => '', 'error' => '요청 데이터 인코딩에 실패했습니다.'];
    }

    $ch = curl_init('https://api.solapi.com/messages/v4/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json; charset=utf-8',
        'Authorization: HMAC-SHA256 apiKey=' . SOLAPI_API_KEY . ', date=' . $date . ', salt=' . $salt . ', signature=' . $signature,
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    error_log('[solapi] request body: ' . $body);
    error_log('[solapi] http status: ' . $status . ', response: ' . $response . ', curlError: ' . $curlError);

    // 디버깅용: 실제 전송된 수신/발신번호 (원인 확인 후 제거 예정)
    $debugInfo = ['to' => $to, 'from' => SOLAPI_SENDER_PHONE];

    if ($response === false) {
        return ['success' => false, 'response' => '', 'error' => '솔라피 서버 통신 실패: ' . $curlError, 'debug' => $debugInfo];
    }

    if ($status !== 200 && $status !== 201) {
        return ['success' => false, 'response' => (string)$response, 'error' => '솔라피 전송 실패(HTTP ' . $status . '): ' . $response, 'debug' => $debugInfo];
    }

    return ['success' => true, 'response' => (string)$response, 'error' => null, 'debug' => $debugInfo];
}
