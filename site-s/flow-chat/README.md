# 플로우 채팅 수집기

지정된 테스트 채팅방의 화면에 로드되는 텍스트 메시지를 로컬 MySQL `flowchat.messages`에 저장합니다. 공식 API가 아닌 화면 자동화이므로 화면 구조나 로딩 방식이 바뀌면 동작하지 않을 수 있습니다. 계정에 허용된 채팅방과 회사 보관 정책을 확인하고 사용하세요.

## 준비

- Node.js, Google Chrome, MySQL이 필요합니다.
- XAMPP에서 MySQL을 실행합니다. 기본 접속값은 `127.0.0.1:3306`, 사용자 `root`, 빈 비밀번호입니다. 다른 설정이라면 PowerShell에서 `FLOW_DB_HOST`, `FLOW_DB_PORT`, `FLOW_DB_USER`, `FLOW_DB_PASSWORD` 환경 변수를 설정합니다. 비밀번호를 코드에 기록하지 마세요.
- MySQL 사용자는 `flowchat` 데이터베이스와 테이블을 만들 권한이 있어야 합니다.
- 최초 실행 시 별도 Chrome 창이 열리면 플로우에 직접 로그인합니다. 로그인 프로필은 웹 서버 폴더가 아닌 `%LOCALAPPDATA%\flow-chat-collector\browser-profile`에 보관되므로 다른 사람과 공유하지 마세요.

```powershell
cd C:\xampp\htdocs\@home\Ai_Automation\site-s\flow-chat
npm install
npm run once
```

`npm run once`는 이전 메시지를 위로 스크롤하며 수집하고 종료합니다. `npm run watch`는 30초마다 방을 다시 열어 수집합니다. 종료는 Ctrl+C입니다. 모니터링을 중지한 동안의 메시지는 다음 실행 시 다시 조회합니다.

메시지 ID와 채팅방 ID로 중복을 방지하고, 다시 보이는 메시지는 갱신합니다. 화면에서 삭제된 메시지는 DB에서 자동 삭제하지 않습니다. 첨부 파일 자체, 텍스트가 없는 메시지와 일회성 메시지는 저장하지 않습니다. 메시지가 아예 로드되지 않은 경우 전체 수집을 보장할 수 없으며, 더 이상 이전 내용이 로드되지 않으면 수집을 멈추고 확인 안내를 표시합니다.

기본 채팅방 URL과 ID는 `collector.js`에 지정되어 있습니다. 다른 방을 수집하려면 둘 다 변경해야 합니다. 채팅 내용과 로그인 프로필에는 민감한 정보가 포함될 수 있으므로 MySQL 계정 권한과 로컬 PC 접근을 제한하세요.
