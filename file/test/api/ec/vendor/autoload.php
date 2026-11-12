<?php
// 간단한 오토로더 for PHPMailer (composer 없이 사용)
// PHPMailer가 vendor/phpmailer/phpmailer 에 설치된 구조를 가정하여 경로를 맞춤
require __DIR__ . '/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/phpmailer/src/SMTP.php';
require __DIR__ . '/phpmailer/phpmailer/src/Exception.php';
// 네임스페이스을 바로 사용 가능