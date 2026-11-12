const ACCEPTED_TYPES = new Set(["image/jpeg", "image/png", "image/webp", "image/gif", "image/bmp"]);

function outputExtension(type) {
	return type === "image/jpeg" ? "jpg" : type.split("/")[1];
}

function outputName(fileName, type) {
	const baseName = fileName.replace(/\.[^.]+$/, "");
	return `${baseName}.${outputExtension(type)}`;
}

function makeCanvasBlob(canvas, type) {
	return new Promise((resolve, reject) => {
		canvas.toBlob((blob) => {
			if (blob) {
				resolve(blob);
			} else {
				reject(new Error("이미지를 출력 파일로 변환하지 못했습니다."));
			}
		}, type, 1);
	});
}

async function renderImage(file, settings) {
	const bitmap = await createImageBitmap(file);
	const side = Math.max(bitmap.width, bitmap.height);
	const canvas = document.createElement("canvas");
	const context = canvas.getContext("2d");

	if (!context) {
		bitmap.close();
		throw new Error("캔버스를 사용할 수 없습니다.");
	}

	canvas.width = side;
	canvas.height = side;

	if (settings.background !== "transparent") {
		context.fillStyle = settings.background;
		context.fillRect(0, 0, side, side);
	}

	const offsetX = Math.floor((side - bitmap.width) / 2);
	const offsetY = Math.floor((side - bitmap.height) / 2);
	context.drawImage(bitmap, offsetX, offsetY);
	bitmap.close();

	const type = settings.format === "image/jpeg" && settings.background === "transparent"
		? "image/png"
		: settings.format;
	const blob = await makeCanvasBlob(canvas, type);

	return {
		blob,
		name: outputName(file.name, type),
		width: side,
		height: side,
		type
	};
}

export function initImageEditor() {
	const input = document.querySelector("[data-image-input]");
	const dropzone = document.querySelector("[data-dropzone]");
	const grid = document.querySelector("[data-image-grid]");
	const emptyState = document.querySelector("[data-empty-state]");
	const count = document.querySelector("[data-image-count]");
	const clearButton = document.querySelector("[data-clear-images]");
	const downloadButton = document.querySelector("[data-download-all]");
	const downloadStatus = document.querySelector("[data-download-status]");
	const background = document.querySelector("[data-background]");
	const format = document.querySelector("[data-output-format]");

	if (!input || !dropzone || !grid) {
		return;
	}

	let items = [];
	let nextId = 0;

	const updateSummary = () => {
		count.textContent = String(items.length);
		clearButton.disabled = items.length === 0;
		downloadButton.disabled = items.length === 0 || items.some((item) => item.status === "processing");
		emptyState.hidden = items.length > 0;
	};

	const releaseItem = (item) => {
		if (item.previewUrl) {
			URL.revokeObjectURL(item.previewUrl);
		}
	};

	const renderCards = () => {
		grid.querySelectorAll(".image-item").forEach((card) => card.remove());
		items.forEach((item) => {
			const card = document.createElement("article");
			card.className = "image-item";
			card.dataset.itemId = String(item.id);

			const preview = document.createElement("div");
			preview.className = "image-item-preview";
			if (item.previewUrl) {
				const image = document.createElement("img");
				image.src = item.previewUrl;
				image.alt = `${item.file.name} 변환 미리보기`;
				preview.append(image);
			} else {
				preview.textContent = item.status === "processing" ? "변환 중" : "오류";
			}

			const details = document.createElement("div");
			details.className = "image-item-details";
			const name = document.createElement("strong");
			name.textContent = item.file.name;
			name.title = item.file.name;
			const dimensions = document.createElement("span");
			dimensions.textContent = item.result
				? `${item.result.width} × ${item.result.height}px`
				: item.error || "변환 중...";
			details.append(name, dimensions);

			const actions = document.createElement("div");
			actions.className = "image-item-actions";
			if (item.result) {
				const download = document.createElement("a");
				download.className = "image-item-download";
				download.href = item.previewUrl;
				download.download = item.result.name;
				download.textContent = "다운로드";
				actions.append(download);
			}
			const remove = document.createElement("button");
			remove.type = "button";
			remove.className = "image-item-remove";
			remove.dataset.removeId = String(item.id);
			remove.setAttribute("aria-label", `${item.file.name} 제거`);
			remove.title = "목록에서 제거";
			remove.textContent = "×";
			actions.append(remove);

			card.append(preview, details, actions);
			grid.append(card);
		});
		updateSummary();
	};

	const processItems = async (addedItems) => {
		const settings = { background: background.value, format: format.value };
		await Promise.all(addedItems.map(async (item) => {
			item.renderToken = (item.renderToken || 0) + 1;
			const renderToken = item.renderToken;
			try {
				const result = await renderImage(item.file, settings);
				if (!items.includes(item) || item.renderToken !== renderToken) {
					return;
				}
				item.result = result;
				item.previewUrl = URL.createObjectURL(result.blob);
				item.status = "ready";
			} catch (error) {
				if (!items.includes(item) || item.renderToken !== renderToken) {
					return;
				}
				item.status = "error";
				item.error = error instanceof Error ? error.message : "이미지를 처리하지 못했습니다.";
			}
		}));
		renderCards();
	};

	const addFiles = (files) => {
		const accepted = Array.from(files).filter((file) => ACCEPTED_TYPES.has(file.type));
		if (accepted.length === 0) {
			downloadStatus.textContent = "지원하는 이미지 파일을 선택해 주세요.";
			return;
		}

		downloadStatus.textContent = "";
		const addedItems = accepted.map((file) => ({ id: nextId++, file, status: "processing" }));
		items.push(...addedItems);
		renderCards();
		processItems(addedItems);
	};

	input.addEventListener("change", () => {
		addFiles(input.files);
		input.value = "";
	});

	[background, format].forEach((control) => {
		control.addEventListener("change", () => {
			if (background.value === "transparent" && format.value === "image/jpeg") {
				if (control === format) {
					background.value = "#ffffff";
				} else {
					format.value = "image/png";
				}
			}
			const itemsToRender = [...items];
			itemsToRender.forEach((item) => {
				releaseItem(item);
				item.previewUrl = null;
				item.result = null;
				item.status = "processing";
			});
			if (itemsToRender.length > 0) {
				renderCards();
				processItems(itemsToRender);
			}
		});
	});

	grid.addEventListener("click", (event) => {
		const button = event.target.closest("[data-remove-id]");
		if (!button) {
			return;
		}
		const itemIndex = items.findIndex((item) => item.id === Number(button.dataset.removeId));
		if (itemIndex !== -1) {
			releaseItem(items[itemIndex]);
			items.splice(itemIndex, 1);
			renderCards();
		}
	});

	clearButton.addEventListener("click", () => {
		items.forEach(releaseItem);
		items = [];
		renderCards();
		downloadStatus.textContent = "";
	});

	downloadButton.addEventListener("click", () => {
		const readyItems = items.filter((item) => item.result && item.previewUrl);
		readyItems.forEach((item) => {
			const link = document.createElement("a");
			link.href = item.previewUrl;
			link.download = item.result.name;
			link.click();
		});
		downloadStatus.textContent = `${readyItems.length}개 파일의 다운로드를 시작했습니다.`;
	});

	["dragenter", "dragover"].forEach((eventName) => {
		dropzone.addEventListener(eventName, (event) => {
			event.preventDefault();
			dropzone.classList.add("is-dragging");
		});
	});

	["dragleave", "drop"].forEach((eventName) => {
		dropzone.addEventListener(eventName, (event) => {
			event.preventDefault();
			dropzone.classList.remove("is-dragging");
		});
	});

	dropzone.addEventListener("drop", (event) => addFiles(event.dataTransfer.files));
	updateSummary();
}