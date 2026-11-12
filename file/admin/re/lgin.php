<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 15px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .message { padding: 10px; margin: 10px 0; border-radius: 5px; }
        .error { background: #ffebee; color: red; }
        .success { background: #e8f5e8; color: green; }
        .welcome { text-align: center; padding: 30px; background: #f0f8ff; border-radius: 10px; }
        .logout-btn { background: #f44336; padding: 10px 20px; margin-top: 10px; }
    </style>
</head>
<body>

<?php
session_start();
$conn = new mysqli("svc.sel4.cloudtype.app:32715", "root", "palace", "palacedb");

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// 로그아웃 처리
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: lgin.php");
    exit;
}

// 이미 로그인된 경우
if (isset($_SESSION['username'])) {
    echo "<div class='welcome'>";
    echo "<h2>환영합니다 " . htmlspecialchars($_SESSION['username']) . "님!</h2>";
    echo "<p>로그인이 성공적으로 완료되었습니다.</p>";
    echo "<p>가입하신 이메일: <strong>" . htmlspecialchars($_SESSION['email']) . "</strong></p>";
    echo "<button class='logout-btn' onclick=\"location.href='lgin.php?logout=1'\">로그아웃</button>";
    echo "</div>";
} else {
    // 로그인 처리
    if ($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // es_testTable에서 사용자 조회 (signup.php와 동일한 구조)
        $stmt = $conn->prepare("SELECT sno, username, email, password FROM es_testTable WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // 비밀번호 확인 (signup.php에서 password_hash로 저장하므로 password_verify 사용)
            if (password_verify($password, $user['password'])) {
                // 로그인 성공
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['sno'] = $user['sno'];
                
                echo "<div class='message success'>로그인 성공! 페이지를 새로고침합니다...</div>";
                echo "<script>setTimeout(function(){ location.reload(); }, 1000);</script>";
            } else {
                echo "<div class='message error'>비밀번호가 일치하지 않습니다.</div>";
            }
        } else {
            echo "<div class='message error'>존재하지 않는 사용자입니다.</div>";
        }
    }
    
    // 로그인 폼
    ?>
    <h2>로그인</h2>
    
    <form method="POST">
        <input type="text" name="username" placeholder="사용자명" required>
        <input type="password" name="password" placeholder="비밀번호" required>
        <button type="submit">로그인</button>
    </form>
    
    <div style="text-align: center; margin-top: 20px;">
        <p>계정이 없으신가요? <a href="signup.php" style="color: #4CAF50; text-decoration: none;">회원가입하기</a></p>
    </div>
    
    <?php
}
?>

</body>
</html>
