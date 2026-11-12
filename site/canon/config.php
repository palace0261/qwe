<?php
// 문의 게시판 설정. 환경변수(CANON_*)가 있으면 환경변수가 우선합니다.
if (!defined('CANON_BOARD')) { http_response_code(403); exit; }

return [
    'db_host' => 'svc.sel4.cloudtype.app',
    'db_port' => 31446,
    'db_name' => 'palace0261',
    'db_user' => 'root',
    'db_password' => 'palace0261@@',

    'admin_password_hash' => '$2y$10$HT7zbXYWpNYL5FNrhmbxCuTnt.u97TtSfArYzeXPn/sMrn1nI8j2O',
    'rate_limit_key' => '78c9d2164b6907c4d0d901c62226d9e3a9466f47dc84ecdb36d6ac3715bb5464',

    // cloudflare: 신뢰된 Cloudflare 경유 + KR만 허용 / local 및 allow_ips는 항상 허용 / off: 국가 제한 해제
    'geo_mode' => 'cloudflare',
    'flow_project_id' => '1569726',
    'flow_register_email' => 'stage516@naver.com',
    'allow_local' => true,
    'allow_ips' => [],
    'cloudflare_cidrs' => [
        '173.245.48.0/20', '103.21.244.0/22', '103.22.200.0/22', '103.31.4.0/22',
        '141.101.64.0/18', '108.162.192.0/18', '190.93.240.0/20', '188.114.96.0/20',
        '197.234.240.0/22', '198.41.128.0/17', '162.158.0.0/15', '104.16.0.0/13',
        '104.24.0.0/14', '172.64.0.0/13', '131.0.72.0/22',
        '2400:cb00::/32', '2606:4700::/32', '2803:f800::/32', '2405:b500::/32',
        '2405:8100::/32', '2a06:98c0::/29', '2c0f:f248::/32',
    ],
];
