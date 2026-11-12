<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>서버 테스트</title>
</head>
<body>

<?php
// 페이지 로드 시 다음 sno 번호를 미리 가져오기
$conn = new mysqli("svc.sel4.cloudtype.app:32715", "root", "palace", "palacedb");
$nextSno = 1; // 기본값

if (!$conn->connect_error) {
    // 현재 가장 큰 sno 값 조회
    $sql = "SELECT MAX(sno) as max_sno FROM es_testTable";
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nextSno = ($row['max_sno'] !== null) ? $row['max_sno'] + 1 : 1;
    }
}
?>

  <section>
    <div>
      <h1>서버 테스트 페이지</h1>
      <p>이 페이지는 서버가 정상적으로 작동하는지 확인하기 위한 테스트 페이지입니다.</p>

      <form action="test.php" method="post">
        <div style="margin-bottom: 15px;">
          <label for="sno">Serial Number (sno):</label>
          <input type="text" id="sno" name="sno" value="<?php echo $nextSno; ?>" placeholder="시리얼 번호 (자동 생성)" readonly style="background-color: #f0f0f0;">
          <small style="color: #666; margin-left: 10px;">* 자동 생성된 번호입니다</small>
        </div>
        
        <div style="margin-bottom: 15px;">
          <label for="username">Test Number (username):</label>
          <input type="text" id="username" name="username" value="" placeholder="테스트 번호 입력" required>
        </div>
        
        <div style="margin-bottom: 15px;">
          <label for="email">Test ID (email):</label>
          <input type="text" id="email" name="email" value="" placeholder="테스트 ID 입력" required>
        </div>
        
        <input type="submit" value="데이터베이스에 전송" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
      </form>

    </div>
  </section>
  
</body>
</html>


<?php
// 이미 위에서 연결을 했으므로 연결 상태 확인만
if ($conn->connect_error) {
    die("데이터베이스 연결 실패: " . $conn->connect_error);
}

echo "<div style='margin-top: 30px; padding: 20px; border-top: 2px solid #ccc;'>";
echo "<h2>palacedb에서 조회된 데이터</h2>";
echo "<p style='color: #666;'>다음 자동 생성 번호: <strong style='color: #4CAF50;'>" . $nextSno . "</strong></p>";

// es_testTable에서 sno, username, email 값 조회
$sql = "SELECT sno, username, email, created_at FROM es_testTable ORDER BY sno DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%; margin-top: 15px;'>";
    echo "<tr style='background-color: #4CAF50; color: white;'>
            <th style='padding: 12px; text-align: left;'>Serial Number (sno)</th>
            <th style='padding: 12px; text-align: left;'>Test Number (username)</th>
            <th style='padding: 12px; text-align: left;'>Test ID (email)</th>
            <th style='padding: 12px; text-align: left;'>등록일시</th>
          </tr>";
    
    // 각 행의 데이터 출력
    while($row = $result->fetch_assoc()) {
        echo "<tr style='background-color: #f9f9f9;'>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . htmlspecialchars($row["sno"]) . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . htmlspecialchars($row["username"]) . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . htmlspecialchars($row["email"]) . "</td>";
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . 
             (isset($row["created_at"]) ? htmlspecialchars($row["created_at"]) : "N/A") . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<p style='margin-top: 15px; color: #2e7d32; font-weight: bold;'>
            총 " . $result->num_rows . "개의 레코드가 조회되었습니다.
          </p>";
} else {
    echo "<div style='background-color: #ffebee; border: 1px solid #f44336; color: #c62828; padding: 15px; border-radius: 4px;'>";
    echo "<strong>알림:</strong> 조회된 데이터가 없습니다.";
    echo "</div>";
}

echo "</div>";

// 연결 종료
$conn->close();
?>