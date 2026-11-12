<?php
// 에러 검증용 코드입니다.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // 세션을 시작합니다.

$dbHost = 'svc.sel4.cloudtype.app:32715'; // 데이터베이스 호스트
$dbUser = 'root'; // 데이터베이스 사용자 이름
$dbPass = 'palace'; // 데이터베이스 비밀번호
$dbName = 'palacedb'; // 데이터베이스 이름

// 데이터베이스 연결
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST 데이터 검증 및 정제
if (!isset($_POST['user_id']) || !isset($_POST['user_pw'])) {
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
    echo "window.location.replace('login.php');</script>";
    exit;
}

$user_id = $conn->real_escape_string($_POST['user_id']);
$user_pw = $_POST['user_pw'];

// 데이터베이스 쿼리
$sql = "SELECT * FROM users WHERE userid = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($user_pw, $row['password'])) {
        // 인증 성공, 세션 변수 설정
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $row['name'];

        // 페이지 리다이렉션
        header("Location: index.php");
        exit;
    } else {
        // 인증 실패
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번1호가 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
} else {
    // 사용자가 존재하지 않음
    header("Content-Type: text/html; charset=UTF-8");
    echo "<script>alert('아이디 또는 비밀번호2가 잘못되었습니다.');";
    echo "window.location.replace('login.php');</script>";
    exit;
}

$conn->close(); // 데이터베이스 연결 종료
?>  