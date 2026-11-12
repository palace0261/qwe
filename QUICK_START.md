# 🚀 주식 포트폴리오 - 빠른 시작 가이드

## Windows 사용자

파일 탐색기에서 **`start-stock-portfolio.bat`** 파일을 **더블클릭**하면 됩니다.

```
c:\xampp\htdocs\@home\Ai_Automation\start-stock-portfolio.bat
```

자동으로 두 개의 터미널이 열리고 서버가 시작됩니다.

### 실행 후:
1. 잠시 기다리면 React 앱이 localhost:3000에서 실행됩니다
2. 사이트 접속: http://localhost/@home/Ai_Automation/public/?page=home
3. 메뉴에서 **"📈 주식 포트폴리오"** 클릭

---

## Mac/Linux 사용자

터미널에서 다음 명령어를 실행:

```bash
cd c:/xampp/htdocs/@home/Ai_Automation
chmod +x start-stock-portfolio.sh
./start-stock-portfolio.sh
```

또는 직접:

```bash
cd stock-portfolio/backend && npm run dev &
cd ../frontend && npm start
```

---

## 🛑 서버 종료하기

- **Windows**: 터미널 창에서 `Ctrl+C` 또는 창 닫기
- **Mac/Linux**: 터미널에서 `Ctrl+C`

---

## ✅ 정상 작동 확인

모두 성공하면:
- ✅ 백엔드: http://localhost:5000/api/health → `{"status":"정상"}`
- ✅ 프론트엔드: http://localhost:3000 → 로그인 페이지
- ✅ 사이트: http://localhost/@home/Ai_Automation/public/?page=home → 메뉴에 📈 추가

---

## 🔧 첫 실행만 느릴 수 있습니다

- `npm install` 때문에 처음엔 시간이 걸립니다 (2-5분)
- 이후 실행부터는 빨라집니다

---

## ❓ 에러 발생 시

**MongoDB 연결 실패:**
```
MongoDB 연결 실패: connect ECONNREFUSED
```
→ MongoDB를 별도로 설치하거나 MongoDB Atlas 사용

**포트 이미 사용 중:**
```
listen EADDRINUSE: address already in use :::5000
```
→ 다른 프로그램이 포트를 사용 중입니다. 종료 후 재시작

---

## 📚 수동 실행 (터미널 3개)

```bash
# 터미널 1 - 백엔드
cd stock-portfolio/backend
npm run dev

# 터미널 2 - 프론트엔드
cd stock-portfolio/frontend
npm start

# 브라우저
http://localhost/@home/Ai_Automation/public/?page=home
```

---

**모두 설정되었습니다!** 🎉 이제 클릭 한 번으로 시작할 수 있습니다.
