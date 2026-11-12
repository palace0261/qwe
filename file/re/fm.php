<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>서버 테스트</title>
</head>
<body>

  <section>
    <div>
      <h1>서버 테스트 페이지</h1>
      <p>이 페이지는 서버가 정상적으로 작동하는지 확인하기 위한 테스트 페이지입니다.</p>

      <form action="https://port-9000-testphp-ma6q5cjy22737d6f.sel4.cloudtype.app/re/test.php" method="post">
        <div style="margin-bottom: 15px;">
          <label for="sno">Serial Number (sno):</label>
          <input type="text" id="sno" name="sno" placeholder="시리얼 번호 입력" required>
        </div>
        
        <div style="margin-bottom: 15px;">
          <label for="testNo">Test Number (testNo):</label>
          <input type="text" id="testNo" name="testNo" placeholder="테스트 번호 입력" required>
        </div>
        
        <div style="margin-bottom: 15px;">
          <label for="testId">Test ID (testId):</label>
          <input type="text" id="testId" name="testId" placeholder="테스트 ID 입력" required>
        </div>
        
        <input type="submit" value="데이터베이스에 전송" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
      </form>

    </div>
  </section>
  
</body>
</html>


<?php

$conn = new mysqli("svc.sel4.cloudtype.app:32715", "root", "palace", "palacedb");

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}
?>