#!/bin/bash

cd "$(dirname "$0")"

echo ""
echo "========================================"
echo "📈 주식 포트폴리오 시스템 시작"
echo "========================================"
echo ""

echo "[1/2] 백엔드 서버 시작 중... (Node.js)"
cd stock-portfolio/backend
npm install
npm run dev &
BACKEND_PID=$!

sleep 3

echo "[2/2] 프론트엔드 서버 시작 중... (React)"
cd ../frontend
npm install
npm start &
FRONTEND_PID=$!

sleep 2

echo ""
echo "========================================"
echo "✅ 모두 시작되었습니다!"
echo "========================================"
echo ""
echo "잠시 후 브라우저에서 다음 주소를 열어주세요:"
echo "http://localhost/@home/Ai_Automation/public/?page=home"
echo ""
echo "또는 직접 메뉴에서 '📈 주식 포트폴리오' 클릭"
echo ""
echo "서버 종료: Ctrl+C 입력"
echo ""

wait $BACKEND_PID $FRONTEND_PID
