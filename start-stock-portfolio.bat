@echo off
chcp 65001 > nul
cd /d "%~dp0"

echo.
echo ========================================
echo 📈 주식 포트폴리오 시스템 시작
echo ========================================
echo.

REM 백엔드 터미널 실행
echo [1/2] 백엔드 서버 시작 중... (Node.js)
start "주식포트폴리오 - 백엔드 (5000포트)" cmd /k "cd stock-portfolio\backend && npm install && npm run dev"

timeout /t 3

REM 프론트엔드 터미널 실행
echo [2/2] 프론트엔드 서버 시작 중... (React)
start "주식포트폴리오 - 프론트엔드 (3000포트)" cmd /k "cd stock-portfolio\frontend && npm install && npm start"

timeout /t 2

echo.
echo ========================================
echo ✅ 모두 시작되었습니다!
echo ========================================
echo.
echo 잠시 후 브라우저에서 다음 주소를 열어주세요:
echo http://localhost/@home/Ai_Automation/public/?page=home
echo.
echo 또는 직접 메뉴에서 "📈 주식 포트폴리오" 클릭
echo.
pause
