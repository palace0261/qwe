<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $username = $data['username'] ?? '';
    $password = $data['password'] ?? '';
    $action = $data['action'] ?? 'login';

    if ($action === 'register') {
        // 회원가입
        $email = $data['email'] ?? '';

        if (!$username || !$email || !$password) {
            response(['error' => '모든 필드는 필수입니다'], 400);
        }

        // 중복 확인
        $check = $conn->prepare('SELECT id FROM users WHERE username = ? OR email = ?');
        $check->bind_param('ss', $username, $email);
        $check->execute();

        if ($check->get_result()->num_rows > 0) {
            response(['error' => '이미 존재하는 계정입니다'], 400);
        }

        // 비밀번호 해싱
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // 사용자 생성
        $stmt = $conn->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['username'] = $username;

            response([
                'success' => true,
                'user' => [
                    'id' => $conn->insert_id,
                    'username' => $username,
                    'email' => $email
                ]
            ], 201);
        } else {
            response(['error' => '회원가입 실패'], 500);
        }
    } else {
        // 로그인
        if (!$username || !$password) {
            response(['error' => '아이디와 비밀번호를 입력해주세요'], 400);
        }

        $stmt = $conn->prepare('SELECT id, username, email, password FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            response(['error' => '존재하지 않는 계정입니다'], 401);
        }

        $user = $result->fetch_assoc();

        if (!password_verify($password, $user['password'])) {
            response(['error' => '비밀번호가 틀렸습니다'], 401);
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        response([
            'success' => true,
            'user' => [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email']
            ]
        ]);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    response(['success' => true, 'message' => '로그아웃되었습니다']);
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'user') {
    if ($current_user_id) {
        $stmt = $conn->prepare('SELECT id, username, email FROM users WHERE id = ?');
        $stmt->bind_param('i', $current_user_id);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        response(['user' => $user]);
    } else {
        response(['user' => null]);
    }
} else {
    response(['error' => '잘못된 요청입니다'], 400);
}
