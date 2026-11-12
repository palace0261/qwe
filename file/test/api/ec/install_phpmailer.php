<?php
// PHPMailer 자동 설치 스크립트
// 사용법 (명령행 권장):
// php install_phpmailer.php
// 또는 Windows에서: C:\xampp\php\php.exe install_phpmailer.php

set_time_limit(0);
error_reporting(E_ALL);

$zipUrl = 'https://github.com/PHPMailer/PHPMailer/archive/refs/heads/master.zip';
$tmpDir = sys_get_temp_dir();
$zipFile = $tmpDir . DIRECTORY_SEPARATOR . 'phpmailer_master.zip';
$vendorDir = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'phpmailer' . DIRECTORY_SEPARATOR . 'phpmailer';

echo "PHPMailer 자동 설치 스크립트 시작\n";
echo "다운로드 위치: $zipUrl\n";

// 다운로드
if (file_exists($zipFile)) {
    unlink($zipFile);
}

echo "다운로드 중...\n";
// 우선 file_get_contents 사용, 실패하면 curl 사용
$data = false;
if (ini_get('allow_url_fopen')) {
    $data = @file_get_contents($zipUrl);
}
if ($data === false && function_exists('curl_version')) {
    $ch = curl_init($zipUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
    if ($data === false) {
        echo "curl 실패: $err\n";
    }
}

if ($data === false) {
    echo "다운로드 실패: allow_url_fopen 비활성화 또는 curl 미사용 가능\n";
    exit(1);
}

file_put_contents($zipFile, $data);
echo "압축 파일 저장: $zipFile\n";

// Zip 해제
if (!class_exists('ZipArchive')) {
    echo "ZipArchive 클래스가 없습니다. PHP에 zip 확장 모듈이 필요합니다.\n";
    exit(1);
}

$zip = new ZipArchive();
if ($zip->open($zipFile) !== true) {
    echo "ZIP 파일 열기 실패\n";
    exit(1);
}

// 임시 추출 경로
$extractBase = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'phpmailer' . DIRECTORY_SEPARATOR . 'extract_temp';
if (is_dir($extractBase)) {
    // 비어있게
    $it = new RecursiveDirectoryIterator($extractBase, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($files as $file) {
        if ($file->isDir()) rmdir($file->getRealPath()); else unlink($file->getRealPath());
    }
    @rmdir($extractBase);
}
mkdir($extractBase, 0777, true);

echo "압축 해제 중...\n";
$zip->extractTo($extractBase);
$zip->close();

// 압축 내부에는 보통 PHPMailer-master/ 형식의 폴더가 있음. 그 안의 src 폴더를 vendor/phpmailer/phpmailer로 옮김
$entries = scandir($extractBase);
$rootFolder = '';
foreach ($entries as $e) {
    if ($e === '.' || $e === '..') continue;
    $rootFolder = $extractBase . DIRECTORY_SEPARATOR . $e;
    break;
}

if ($rootFolder === '' || !is_dir($rootFolder)) {
    echo "압축 구조를 찾을 수 없습니다.\n";
    exit(1);
}

// 대상 폴더 준비
if (is_dir($vendorDir)) {
    echo "기존 vendor/phpmailer/phpmailer 디렉토리가 존재합니다. 덮어쓰기 중...\n";
    // 기존 삭제(주의)
    $it = new RecursiveDirectoryIterator($vendorDir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($files as $file) {
        if ($file->isDir()) rmdir($file->getRealPath()); else unlink($file->getRealPath());
    }
    @rmdir($vendorDir);
}
mkdir($vendorDir, 0777, true);

// 복사
function rrcopy($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . DIRECTORY_SEPARATOR . $file)) {
                rrcopy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
            } else {
                copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
            }
        }
    }
    closedir($dir);
}

rrcopy($rootFolder, $vendorDir);

// 간단한 autoload 파일 생성
$autoloadFile = __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$autoloadContent = <<<'PHP'
<?php
// 간단한 오토로더 for PHPMailer (composer 없이 사용)
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';
require __DIR__ . '/phpmailer/src/Exception.php';
// 네임스페이스를 바로 사용 가능
PHP;

file_put_contents($autoloadFile, $autoloadContent);

echo "설치 완료: $vendorDir\n";
echo "오토로드 파일: $autoloadFile\n";
echo "이제 mailsend.php에서 require __DIR__ . '/vendor/autoload.php' 로 로드할 수 있습니다.\n";

// 임시 파일 정리
@unlink($zipFile);
// 추출 임시 폴더는 유지하지 않음
function rrmdir($dir) {
    if (!is_dir($dir)) return;
    $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($files as $file) {
        if ($file->isDir()) rmdir($file->getRealPath()); else unlink($file->getRealPath());
    }
    rmdir($dir);
}
rrmdir($extractBase);

echo "임시 파일 정리 완료\n";

exit(0);

?>
