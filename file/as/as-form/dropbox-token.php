<?php
// refresh token을 이용해 매번 새로운 access token을 발급받습니다.
// access token은 4시간마다 만료되지만, refresh token은 만료되지 않으므로
// 이 함수를 호출할 때마다 항상 유효한 access token을 받을 수 있습니다.
function getDropboxAccessToken()
{
    $ch = curl_init('https://api.dropbox.com/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'grant_type' => 'refresh_token',
        'refresh_token' => DROPBOX_REFRESH_TOKEN,
    ]));
    curl_setopt($ch, CURLOPT_USERPWD, DROPBOX_APP_KEY . ':' . DROPBOX_APP_SECRET);
    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        throw new Exception('드롭박스 토큰 서버 통신 실패: ' . $curlError);
    }

    if ($status !== 200) {
        throw new Exception('드롭박스 토큰 갱신 실패: ' . $response);
    }

    $data = json_decode($response, true);
    if (empty($data['access_token'])) {
        throw new Exception('드롭박스 토큰 응답 파싱 실패.');
    }

    return $data['access_token'];
}
