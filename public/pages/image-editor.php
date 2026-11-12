<section class="page page-image-editor" data-page="image-editor">
	<header class="page-head image-editor-head">
		<div>
			<p class="image-editor-kicker">IMAGE WORKSPACE</p>
			<h1>이미지 편집</h1>
			<p>여러 이미지를 한 번에 정사각형 캔버스로 맞추고 다운로드하세요.</p>
		</div>
		<div class="image-editor-count" aria-live="polite">
			<strong data-image-count>0</strong>
			<span>개 이미지</span>
		</div>
	</header>

	<div class="image-editor-workspace">
		<div class="image-editor-main">
			<label class="image-dropzone" data-dropzone>
				<input type="file" accept="image/*" multiple data-image-input>
				<span class="dropzone-mark" aria-hidden="true">+</span>
				<strong>이미지를 여기에 끌어다 놓으세요</strong>
				<span>또는 파일을 선택하세요 · JPG, PNG, WebP</span>
			</label>

			<div class="image-list-heading">
				<h2>작업 목록</h2>
				<button class="image-text-button" type="button" data-clear-images disabled>전체 비우기</button>
			</div>
			<div class="image-grid" data-image-grid aria-live="polite">
				<p class="image-empty-state" data-empty-state>이미지를 추가하면 변환 결과가 여기에 표시됩니다.</p>
			</div>
		</div>

		<aside class="image-editor-controls" aria-label="변환 설정">
			<div class="image-control-heading">
				<span>출력 설정</span>
				<strong>1 : 1</strong>
			</div>

			<label class="image-field">
				<span>캔버스 배경</span>
				<select data-background>
					<option value="transparent">투명</option>
					<option value="#ffffff">흰색</option>
					<option value="#f1f3f5">연한 회색</option>
				</select>
			</label>
			<label class="image-field">
				<span>파일 형식</span>
				<select data-output-format>
					<option value="image/png">PNG</option>
					<option value="image/jpeg">JPG</option>
					<option value="image/webp">WebP</option>
				</select>
			</label>

			<p class="image-settings-note">원본을 확대·축소하지 않고 가로·세로 중 긴 변을 기준으로 정사각형 캔버스에 배치합니다. JPG/WebP는 최고 품질로 저장합니다.</p>
			<button class="image-download-all" type="button" data-download-all disabled>
				<span aria-hidden="true">↓</span>
				전체 파일 다운로드
			</button>
			<p class="image-download-status" data-download-status aria-live="polite"></p>
		</aside>
	</div>
</section>