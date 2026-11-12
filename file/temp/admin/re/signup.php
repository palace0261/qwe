<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>회원가입ㅁ</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 15px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .message { padding: 10px; margin: 10px 0; border-radius: 5px; }
        .error { background: #ffebee; color: red; }
        .success { background: #e8f5e8; color: green; }
    </style>
</head>
<body>
    <h2>회원가입ㅁㅁ</h2>
    
    <?php
    $conn = new mysqli("svc.sel4.cloudtype.app:32715", "root", "palace", "palacedb");
    
    if ($conn->connect_error) {
        die("연결 실패: " . $conn->connect_error);
    }
    
    // 테이블 생성
    $conn->query("CREATE TABLE IF NOT EXISTS users (
        sno INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE,
        email VARCHAR(100) UNIQUE,
        password VARCHAR(255)
    )");
    
    if ($_POST) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // 중복 체크
        $check = $conn->prepare("SELECT sno FROM users WHERE username=? OR email=?");
        $check->bind_param("ss", $username, $email);
        $check->execute();
        
        if ($check->get_result()->num_rows > 0) {
            echo "<div class='message error'>이미 존재하는 사용자명 또는 이메일입니다.</div>";
        } else {
            // 회원가입
            $insert = $conn->prepare("INSERT INTO es_testTable (sno, username, email, password) VALUES (?, ?, ?, ?)");
            $insert->bind_param("ssss",$sno, $username, $email, $password);
            

            
            if ($insert->execute()) {
                echo "<div class='message success'>회원가입 성공!</div>";
            } else {
                echo "<div class='message error'>오류: " . $insert->error . "</div>";
            }
        }
    }
    ?>
    
    <form method="POST">
        <input type="text" name="username" placeholder="사용자명" required>
        <input type="email" name="email" placeholder="이메일" required>
        <input type="password" name="password" placeholder="비밀번호" required>
        <button type="submit">회원가입</button>
    </form>
    
    <div style="text-align: center; margin-top: 20px;">
        <p>이미 계정이 있나요? <a href="lgin.php" style="color: #4CAF50; text-decoration: none;">로그인하기</a></p>
    </div>
    
</body>
</html>
