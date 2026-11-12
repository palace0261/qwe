3D Studio 사용법

- 파일 위치: `main/range/3ds.php`

간단 테스트

1. 로컬 서버에서 열기:
   http://localhost/@home/prd/main/range/3ds.php
2. 원격 씬 로드 예:
   http://localhost/@home/prd/main/range/3ds.php?scene=https://example.com/model.babylon
3. 로컬 모델 업로드:
   - 페이지의 `Upload`에서 `.glb`, `.gltf`, `.babylon` 파일을 선택하고 `Load File` 클릭

제어

- Light Intensity: 조명 세기 조절
- Camera Min/Max: 카메라 반경 최소/최대 제한 설정
- Reset Camera: 카메라 위치/반경 초기화

주의

- glTF(.gltf/.glb)는 외부 리소스(텍스처 등)를 참조할 수 있습니다. 복합 리소스는 하나의 .glb(바이너리 glTF)로 묶어 업로드하는 것이 가장 간단합니다.
- 로컬 파일 로드는 Blob URL을 사용합니다. 페이지를 떠나면 브라우저가 Blob URL을 해제합니다.
- 원격 리소스가 CORS로 차단될 경우 자동으로 서버 프록시(`proxy.php`)를 통해 로드합니다.
   - `proxy.php`는 `bolintechnology.com` 호스트만 허용하도록 제한되어 있습니다.
   - 자체 도메인 외 다른 호스트를 허용하려면 `proxy.php`의 허용 호스트를 수정하세요.