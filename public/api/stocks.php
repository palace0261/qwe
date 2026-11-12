<?php
include 'config.php';

$user_id = check_auth();
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // 포트폴리오 조회
    $stmt = $conn->prepare('
        SELECT id, code, name, quantity, buy_price, buy_date, market, currency, notes, target_price, target_note, created_at
        FROM portfolio
        WHERE user_id = ?
        ORDER BY created_at DESC
    ');
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $portfolio = [];
    while ($row = $result->fetch_assoc()) {
        $portfolio[] = $row;
    }

    response(['portfolio' => $portfolio]);
} else if ($method === 'POST') {
    // 종목 추가
    $data = json_decode(file_get_contents('php://input'), true);

    $code = $data['code'] ?? '';
    $name = $data['name'] ?? '';
    $quantity = $data['quantity'] ?? 0;
    $buy_price = $data['buyPrice'] ?? 0;
    $buy_date = $data['buyDate'] ?? '';
    $market = $data['market'] ?? 'KRX';
    $currency = $data['currency'] ?? 'KRW';
    $notes = $data['notes'] ?? '';
    $target_price = $data['targetPrice'] ?? null;
    $target_note = $data['targetPriceNote'] ?? '';

    if (!$code || !$name || !$quantity || !$buy_price || !$buy_date) {
        response(['error' => '필수 필드를 채워주세요'], 400);
    }

    $stmt = $conn->prepare('
        INSERT INTO portfolio (user_id, code, name, quantity, buy_price, buy_date, market, currency, notes, target_price, target_note)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ');

    $stmt->bind_param(
        'issidssssds',
        $user_id, $code, $name, $quantity, $buy_price, $buy_date, $market, $currency, $notes, $target_price, $target_note
    );

    if ($stmt->execute()) {
        response([
            'success' => true,
            'id' => $conn->insert_id,
            'message' => '종목이 추가되었습니다'
        ], 201);
    } else {
        response(['error' => '추가 실패'], 500);
    }
} else if ($method === 'PUT') {
    // 종목 수정
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? 0;

    if (!$id) {
        response(['error' => 'ID가 필요합니다'], 400);
    }

    // 소유권 확인
    $check = $conn->prepare('SELECT id FROM portfolio WHERE id = ? AND user_id = ?');
    $check->bind_param('ii', $id, $user_id);
    $check->execute();

    if ($check->get_result()->num_rows === 0) {
        response(['error' => '접근 권한이 없습니다'], 403);
    }

    $code = $data['code'] ?? '';
    $name = $data['name'] ?? '';
    $quantity = $data['quantity'] ?? 0;
    $buy_price = $data['buyPrice'] ?? 0;
    $notes = $data['notes'] ?? '';
    $target_price = $data['targetPrice'] ?? null;
    $target_note = $data['targetPriceNote'] ?? '';

    $stmt = $conn->prepare('
        UPDATE portfolio
        SET code = ?, name = ?, quantity = ?, buy_price = ?, notes = ?, target_price = ?, target_note = ?
        WHERE id = ? AND user_id = ?
    ');

    $stmt->bind_param(
        'ssiddsii',
        $code, $name, $quantity, $buy_price, $notes, $target_price, $target_note, $id, $user_id
    );

    if ($stmt->execute()) {
        response(['success' => true, 'message' => '수정되었습니다']);
    } else {
        response(['error' => '수정 실패'], 500);
    }
} else if ($method === 'DELETE') {
    // 종목 삭제
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? 0;

    if (!$id) {
        response(['error' => 'ID가 필요합니다'], 400);
    }

    $stmt = $conn->prepare('DELETE FROM portfolio WHERE id = ? AND user_id = ?');
    $stmt->bind_param('ii', $id, $user_id);

    if ($stmt->execute()) {
        response(['success' => true, 'message' => '삭제되었습니다']);
    } else {
        response(['error' => '삭제 실패'], 500);
    }
} else {
    response(['error' => '잘못된 요청입니다'], 400);
}
