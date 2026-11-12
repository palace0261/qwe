<?php
$conn = new mysqli("svc.sel4.cloudtype.app:32715", "root", "palace", "palacedb");
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// POST 데이터 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sno = $_POST['sno'] ?? '';
    $testNo = $_POST['testNo'] ?? '';
    $testId = $_POST['testId'] ?? '';

    $stmt = $conn->prepare("INSERT INTO es_testTable (sno, testNo, testId) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $sno, $testNo, $testId);
    
    if ($stmt->execute()) {
        echo "<h2>전송 성공!</h2>";
        echo "<p>sno: " . htmlspecialchars($sno) . "</p>";
        echo "<p>testNo: " . htmlspecialchars($testNo) . "</p>";
        echo "<p>testId: " . htmlspecialchars($testId) . "</p>";
        echo "<a href='test.html'>다시 전송하기</a>";
    } else {
        echo "오류: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "1218 연결 성공 - POST 데이터를 기다리는 중...";
}

$conn->close();
?>


