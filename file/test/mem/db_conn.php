
<?php
// MySQL 연결 정보
$servername = "svc.sel4.cloudtype.app"; #서버의 실제주소 
$username = "root"; #mysql ID
$password = "palace"; # 지정한  mysql password
$dbname = "palacedb"; #만들었던 데이터베이스 이름1
// MySQL 연결
$conn = new mysqli($servername, $username, $password, $dbname);
// 연결 확인
if ($conn->connect_error) {
die("MySQL 연결 실패: " . $conn->connect_error);
}
?>