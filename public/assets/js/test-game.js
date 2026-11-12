const WORLD_WIDTH = 960;
const WORLD_HEIGHT = 540;
const TARGETED_ATTACK_RANGE = 185;
const SKILL_BINDINGS_STORAGE_KEY = "soda-test-game-skill-bindings-v1";
const RESERVED_KEY_CODES = new Set(["Escape"]);
const MOUSE_BINDINGS = new Map([
	["Mouse0", { button: 0, label: "LMB" }],
	["Mouse1", { button: 1, label: "MMB" }],
	["Mouse2", { button: 2, label: "RMB" }],
	["Mouse3", { button: 3, label: "MB4" }],
	["Mouse4", { button: 4, label: "MB5" }]
]);
const MOVEMENT_DEFINITIONS = [
	{ id: "moveUp", label: "위로 이동", defaultBinding: "KeyW", group: "movement" },
	{ id: "moveLeft", label: "왼쪽 이동", defaultBinding: "KeyA", group: "movement" },
	{ id: "moveDown", label: "아래로 이동", defaultBinding: "KeyS", group: "movement" },
	{ id: "moveRight", label: "오른쪽 이동", defaultBinding: "KeyD", group: "movement" }
];
const SKILL_DEFINITIONS = [
	{ id: "powerShot", label: "파워 샷", defaultBinding: "Mouse2", cooldown: 1.15, group: "skill" },
	{ id: "tripleShot", label: "3연사", defaultBinding: "Mouse1", cooldown: 0.95, group: "skill" },
	{ id: "mouseDash", label: "회피", defaultBinding: "Mouse3", cooldown: 1, group: "skill" },
	{ id: "scatterShot", label: "산탄", defaultBinding: "Mouse4", cooldown: 1.4, group: "skill" },
	{ id: "dash", label: "대시", defaultBinding: "ShiftLeft", cooldown: 1.1, group: "skill" },
	{ id: "rapidFire", label: "난사", defaultBinding: "CapsLock", cooldown: 1.7, group: "skill" }
];
const BINDING_DEFINITIONS = [...MOVEMENT_DEFINITIONS, ...SKILL_DEFINITIONS];

function defaultBindings() {
	return Object.fromEntries(BINDING_DEFINITIONS.map((item) => [item.id, item.defaultBinding]));
}

function isValidBinding(binding, definition) {
	if (MOUSE_BINDINGS.has(binding)) {
		return definition.group === "skill" && binding !== "Mouse0";
	}
	return typeof binding === "string" && /^[A-Za-z][A-Za-z0-9]*$/.test(binding) && !RESERVED_KEY_CODES.has(binding);
}

function loadBindings() {
	const defaults = defaultBindings();
	try {
		const saved = JSON.parse(localStorage.getItem(SKILL_BINDINGS_STORAGE_KEY) || "null");
		if (!saved || typeof saved !== "object") return defaults;
		const savedMovement = saved.movement && typeof saved.movement === "object" ? saved.movement : {};
		const savedSkills = saved.skills && typeof saved.skills === "object" ? saved.skills : saved;
		const bindings = { ...defaults };
		const used = new Set();
		for (const definition of BINDING_DEFINITIONS) {
			const source = definition.group === "movement" ? savedMovement : savedSkills;
			const binding = source[definition.id] ?? defaults[definition.id];
			if (!isValidBinding(binding, definition) || used.has(binding)) return defaults;
			bindings[definition.id] = binding;
			used.add(binding);
		}
		return bindings;
	} catch {
		return defaults;
	}
}

function formatSkillBinding(binding) {
	if (MOUSE_BINDINGS.has(binding)) return MOUSE_BINDINGS.get(binding).label;
	if (binding.startsWith("Key")) return binding.slice(3);
	if (binding.startsWith("Digit")) return binding.slice(5);
	const labels = {
		ShiftLeft: "Left Shift",
		ShiftRight: "Right Shift",
		CapsLock: "Caps Lock",
		Space: "Space",
		ControlLeft: "Left Ctrl",
		ControlRight: "Right Ctrl",
		AltLeft: "Left Alt",
		AltRight: "Right Alt",
		MetaLeft: "Left Win",
		MetaRight: "Right Win"
	};
	return labels[binding] || binding;
}

function drawArena(context, elapsed) {
	const glow = context.createRadialGradient(480, 265, 80, 480, 265, 590);
	glow.addColorStop(0, "#19231f");
	glow.addColorStop(0.68, "#101714");
	glow.addColorStop(1, "#080b0b");
	context.fillStyle = glow;
	context.fillRect(0, 0, WORLD_WIDTH, WORLD_HEIGHT);

	context.strokeStyle = "rgba(147, 186, 153, 0.055)";
	context.lineWidth = 1;
	for (let x = 32; x < WORLD_WIDTH; x += 48) {
		context.beginPath();
		context.moveTo(x, 0);
		context.lineTo(x, WORLD_HEIGHT);
		context.stroke();
	}
	for (let y = 28; y < WORLD_HEIGHT; y += 48) {
		context.beginPath();
		context.moveTo(0, y);
		context.lineTo(WORLD_WIDTH, y);
		context.stroke();
	}

	context.save();
	context.translate(480, 270);
	context.rotate(elapsed * 0.025);
	context.strokeStyle = "rgba(135, 177, 143, 0.09)";
	context.lineWidth = 1;
	for (const radius of [86, 148, 218]) {
		context.beginPath();
		context.arc(0, 0, radius, 0.2, Math.PI * 1.8);
		context.stroke();
	}
	for (let index = 0; index < 12; index += 1) {
		const angle = index * Math.PI / 6;
		context.fillStyle = index % 3 === 0 ? "rgba(232, 190, 113, 0.38)" : "rgba(146, 183, 151, 0.2)";
		context.beginPath();
		context.arc(Math.cos(angle) * 226, Math.sin(angle) * 226, 2.5, 0, Math.PI * 2);
		context.fill();
	}
	context.restore();

	context.strokeStyle = "rgba(155, 196, 158, 0.42)";
	context.lineWidth = 2;
	context.strokeRect(18, 18, WORLD_WIDTH - 36, WORLD_HEIGHT - 36);
	for (const x of [40, WORLD_WIDTH - 40]) {
		for (const y of [40, WORLD_HEIGHT - 40]) {
			context.fillStyle = "#31433a";
			context.fillRect(x - 8, y - 8, 16, 16);
			context.fillStyle = "#d0aa68";
			context.beginPath();
			context.arc(x, y, 3, 0, Math.PI * 2);
			context.fill();
		}
	}
}

function drawEnemy(context, enemy, elapsed) {
	context.save();
	context.translate(enemy.x, enemy.y);
	context.rotate(enemy.facing);
	const radius = enemy.radius;
	const palettes = {
		stalker: ["#86c7a1", "#315c49", "#dbf0bb"],
		runner: ["#e9c274", "#78582d", "#fff0b0"],
		brute: ["#e28575", "#703e45", "#ffd0a4"],
		spitter: ["#7ed7d0", "#285f66", "#d1ffff"],
		boss: ["#ed8c6d", "#63313a", "#ffe0ad"]
	};
	const [light, dark, eye] = palettes[enemy.kind];
	context.beginPath();
	context.ellipse(0, radius * 0.72, radius * 1.12, radius * 0.48, 0, 0, Math.PI * 2);
	context.fill();

	context.strokeStyle = `rgba(220, 241, 215, ${0.15 + Math.sin(elapsed * 4 + enemy.seed) * 0.08})`;
	context.lineWidth = 1.5;
	context.beginPath();
	context.arc(0, 0, radius + 5 + Math.sin(elapsed * 5 + enemy.seed) * 2, 0, Math.PI * 2);
	context.stroke();

	context.fillStyle = dark;
	context.beginPath();
	context.ellipse(0, 0, radius, radius * 0.78, 0, 0, Math.PI * 2);
	context.fill();
	context.fillStyle = enemy.hitTime > 0 ? "#fff0df" : light;
	context.beginPath();
	context.ellipse(-2, -2, radius * 0.78, radius * 0.58, 0, 0, Math.PI * 2);
	context.fill();

	if (enemy.kind === "brute" || enemy.kind === "boss") {
		context.fillStyle = dark;
		for (const side of [-1, 1]) {
			context.beginPath();
			context.moveTo(side * radius * 0.42, -radius * 0.54);
			context.lineTo(side * radius * 0.92, -radius * 1.28);
			context.lineTo(side * radius * 0.82, -radius * 0.22);
			context.closePath();
			context.fill();
		}
	}
	if (enemy.kind === "spitter") {
		context.strokeStyle = "rgba(188, 255, 237, 0.7)";
		context.lineWidth = 2;
		context.beginPath();
		context.arc(0, 0, radius * 0.52, elapsed * 2, elapsed * 2 + Math.PI * 1.5);
		context.stroke();
	}

	context.fillStyle = eye;
	context.beginPath();
	context.ellipse(radius * 0.32, -radius * 0.16, Math.max(2.5, radius * 0.16), Math.max(2, radius * 0.11), 0, 0, Math.PI * 2);
	context.fill();
	context.fillStyle = "#19221e";
	context.beginPath();
	context.arc(radius * 0.38, -radius * 0.16, Math.max(1.5, radius * 0.055), 0, Math.PI * 2);
	context.fill();
	context.restore();

	const barWidth = radius * 2.4;
	const barY = enemy.y - radius - 14;
	context.fillStyle = "rgba(0, 0, 0, 0.72)";
	context.fillRect(enemy.x - barWidth / 2, barY, barWidth, 5);
	context.fillStyle = enemy.kind === "boss" ? "#f0a36f" : "#a7cf9d";
	context.fillRect(enemy.x - barWidth / 2, barY, barWidth * Math.max(0, enemy.hp / enemy.maxHp), 5);

	if (enemy.attackWindup > 0) {
		context.strokeStyle = `rgba(255, 177, 105, ${0.5 + enemy.attackWindup})`;
		context.lineWidth = 3;
		context.beginPath();
		context.arc(enemy.x, enemy.y, radius + 12 + (0.32 - enemy.attackWindup) * 22, 0, Math.PI * 2);
		context.stroke();
	}
	context.restore();
}

function drawPlayer(context, player, elapsed) {
	context.save();
	context.translate(player.x, player.y);
	context.rotate(player.facing);
	if (player.invulnerable > 0) {
		context.strokeStyle = `rgba(170, 233, 193, ${0.45 + Math.sin(elapsed * 24) * 0.35})`;
		context.lineWidth = 3;
		context.beginPath();
		context.arc(0, 0, 25, 0, Math.PI * 2);
		context.stroke();
	}
	context.fillStyle = "rgba(0, 0, 0, 0.5)";
	context.beginPath();
	context.ellipse(0, 10, 20, 12, 0, 0, Math.PI * 2);
	context.fill();
	context.strokeStyle = "#91d7b1";
	context.lineWidth = 2;
	context.beginPath();
	context.arc(0, 0, 19, 0.25, Math.PI * 1.75);
	context.stroke();
	context.fillStyle = "#31584a";
	context.beginPath();
	context.moveTo(-12, -10);
	context.lineTo(8, -13);
	context.lineTo(15, -5);
	context.lineTo(15, 7);
	context.lineTo(7, 13);
	context.lineTo(-12, 10);
	context.closePath();
	context.fill();
	context.fillStyle = "#bce4c8";
	context.beginPath();
	context.ellipse(1, 0, 10, 8, 0, 0, Math.PI * 2);
	context.fill();
	context.fillStyle = "#15221c";
	context.fillRect(5, -3, 19, 6);
	context.fillStyle = "#f2d79a";
	context.fillRect(20, -2, 8, 4);
	context.restore();
}

function drawMovementIndicator(context, player, angle, isMoving, elapsed) {
	context.save();
	context.translate(player.x, player.y);
	context.rotate(angle);

	const pulse = isMoving ? Math.sin(elapsed * 12) * 2.5 : 0;
	const distance = 30 + pulse;
	const alpha = isMoving ? 0.95 : 0.6;

	context.strokeStyle = isMoving ? "rgba(127, 255, 212, 0.7)" : "rgba(145, 215, 177, 0.35)";
	context.lineWidth = 1.8;
	context.beginPath();
	context.arc(0, 0, 26, -0.44, 0.44);
	context.stroke();

	context.fillStyle = isMoving ? "#7fffd4" : "#91d7b1";
	context.shadowColor = "#7fffd4";
	context.shadowBlur = isMoving ? 9 : 4;
	context.globalAlpha = alpha;
	context.beginPath();
	context.moveTo(distance + 9, 0);
	context.lineTo(distance - 2, -6.5);
	context.lineTo(distance + 1.5, 0);
	context.lineTo(distance - 2, 6.5);
	context.closePath();
	context.fill();

	if (isMoving) {
		context.fillStyle = "rgba(127, 255, 212, 0.45)";
		context.shadowBlur = 0;
		context.beginPath();
		context.moveTo(distance - 4, 0);
		context.lineTo(distance - 11, -5);
		context.lineTo(distance - 8.5, 0);
		context.lineTo(distance - 11, 5);
		context.closePath();
		context.fill();
	}

	context.restore();
}

function drawProjectile(context, projectile) {
	context.save();
	context.globalAlpha = Math.min(1, projectile.life * 2.5);
	context.shadowColor = projectile.color;
	context.shadowBlur = projectile.radius * 3;
	context.fillStyle = projectile.color;
	context.beginPath();
	context.ellipse(projectile.x, projectile.y, projectile.radius * 1.6, projectile.radius, 0, 0, Math.PI * 2);
	context.fill();
	context.restore();
}

function drawBeam(context, beam) {
	context.save();
	context.globalAlpha = Math.max(0, beam.life / beam.maxLife);
	context.strokeStyle = beam.color;
	context.shadowColor = beam.color;
	context.shadowBlur = 12;
	context.lineWidth = 2.5;
	context.beginPath();
	context.moveTo(beam.startX, beam.startY);
	context.lineTo(beam.endX, beam.endY);
	context.stroke();
	context.restore();
}

function drawParticle(context, particle) {
	context.save();
	context.globalAlpha = Math.max(0, particle.life / particle.maxLife);
	context.fillStyle = particle.color;
	context.shadowColor = particle.color;
	context.shadowBlur = 8;
	context.beginPath();
	context.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
	context.fill();
	context.restore();
}

export function initTestGame() {
	const canvas = document.querySelector("[data-test-game]");
	const context = canvas?.getContext("2d");
	const roundDisplay = document.querySelector("[data-game-round]");
	const enemyDisplay = document.querySelector("[data-game-enemies]");
	const livesDisplay = document.querySelector("[data-game-lives]");
	const healthFill = document.querySelector("[data-game-health]");
	const healthDisplay = document.querySelector("[data-game-health-value]");
	const armorCooldownDisplay = document.querySelector("[data-game-armor-cooldown]");
	const scoreDisplay = document.querySelector("[data-game-score]");
	const overlay = document.querySelector("[data-game-overlay]");
	const overlayTitle = document.querySelector("[data-game-overlay-title]");
	const overlayText = document.querySelector("[data-game-overlay-text]");
	const restartButton = document.querySelector("[data-game-restart]");
	const settingsButton = document.querySelector("[data-game-settings-open]");
	const settingsDialog = document.querySelector("[data-game-settings]");
	const bindingsList = document.querySelector("[data-game-bindings]");
	const settingsMessage = document.querySelector("[data-game-settings-message]");
	const settingsSaveButton = document.querySelector("[data-game-settings-save]");
	const settingsCancelButton = document.querySelector("[data-game-settings-cancel]");
	if (!canvas || !context || !roundDisplay || !armorCooldownDisplay || !overlay || !restartButton || !settingsButton || !settingsDialog || !bindingsList || !settingsMessage || !settingsSaveButton || !settingsCancelButton) {
		return;
	}

	const world = { width: WORLD_WIDTH, height: WORLD_HEIGHT };
	const keys = new Set();
	const mouseButtons = new Set();
	const enemies = [];
	const playerShots = [];
	const enemyShots = [];
	const beams = [];
	const particles = [];
	const cooldowns = new Map();
	const pointer = { x: 720, y: 250 };
	const player = {
		x: 480,
		y: 270,
		facing: 0,
		moveAngle: 0,
		radius: 16,
		armor: 1,
		maxArmor: 1,
		armorRecharge: 0,
		lives: 3,
		invulnerable: 0
	};
	let bindings = loadBindings();
	let draftBindings = { ...bindings };
	let capturingBinding = null;
	const listeners = new AbortController();
	const listenerOptions = { signal: listeners.signal };
	let round = 1;
	let score = 0;
	let spawnRemaining = 0;
	let spawnTimer = 0;
	let shootTimer = 0;
	let phase = "active";
	let phaseTimer = 0;
	let elapsed = 0;
	let lastFrame = 0;
	let scale = 1;
	let pixelRatio = 1;
	let dashTime = 0;
	let resizeObserver;

	const resize = () => {
		const bounds = canvas.getBoundingClientRect();
		pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
		scale = bounds.width / WORLD_WIDTH;
		const canvasWidth = Math.round(bounds.width * pixelRatio);
		const canvasHeight = Math.round((bounds.width * WORLD_HEIGHT / WORLD_WIDTH) * pixelRatio);
		if (canvas.width !== canvasWidth || canvas.height !== canvasHeight) {
			canvas.width = canvasWidth;
			canvas.height = canvasHeight;
		}
	};

	const showOverlay = (title, text, showRestart = false) => {
		overlayTitle.textContent = title;
		overlayText.textContent = text;
		restartButton.hidden = !showRestart;
		overlay.hidden = false;
	};

	const hideOverlay = () => {
		overlay.hidden = true;
	};

	const updateHud = () => {
		roundDisplay.textContent = String(round).padStart(2, "0");
		enemyDisplay.textContent = String(enemies.length + spawnRemaining);
		livesDisplay.textContent = `${"♥ ".repeat(player.lives).trim()}${player.lives === 0 ? "-" : ""}`;
		livesDisplay.setAttribute("aria-label", `남은 목숨 ${player.lives}개`);
		const armorPercent = Math.max(0, player.armor / player.maxArmor * 100);
		healthFill.style.width = `${armorPercent}%`;
		healthFill.dataset.level = armorPercent === 0 ? "critical" : "healthy";
		healthDisplay.textContent = String(player.armor);
		armorCooldownDisplay.textContent = player.armor > 0 ? "READY" : `${Math.ceil(player.armorRecharge)}s`;
		scoreDisplay.textContent = String(score).padStart(5, "0");
	};

	const updateBindingHints = () => {
		document.querySelectorAll("[data-skill-hint], [data-movement-hint]").forEach((hint) => {
			const bindingId = hint.dataset.skillHint || hint.dataset.movementHint;
			hint.textContent = formatSkillBinding(bindings[bindingId]);
		});
		canvas.setAttribute("aria-label", `${formatSkillBinding(bindings.moveUp)}, ${formatSkillBinding(bindings.moveLeft)}, ${formatSkillBinding(bindings.moveDown)}, ${formatSkillBinding(bindings.moveRight)}로 이동하고 마우스 좌클릭으로 타겟팅 공격하는 게임`);
	};

	const renderSkillBindings = () => {
		bindingsList.replaceChildren();
		let currentGroup = null;
		for (const definition of BINDING_DEFINITIONS) {
			if (definition.group !== currentGroup) {
				currentGroup = definition.group;
				const groupHeading = document.createElement("h3");
				groupHeading.className = "test-game-binding-group";
				groupHeading.textContent = currentGroup === "movement" ? "이동" : "스킬";
				bindingsList.append(groupHeading);
			}
			const row = document.createElement("div");
			row.className = "test-game-binding-row";
			const label = document.createElement("span");
			label.textContent = definition.label;
			const button = document.createElement("button");
			button.type = "button";
			button.className = "test-game-binding-button";
			button.dataset.bindAction = definition.id;
			button.textContent = capturingBinding === definition.id ? "입력 대기 중 · Esc 취소" : formatSkillBinding(draftBindings[definition.id]);
			button.setAttribute("aria-label", `${definition.label} 키 설정`);
			button.addEventListener("click", () => {
				capturingBinding = definition.id;
				settingsMessage.textContent = `${definition.label}: 사용할 키${definition.group === "skill" ? " 또는 마우스 버튼" : ""}을 누르세요.`;
				renderSkillBindings();
			});
			row.append(label, button);
			bindingsList.append(row);
		}
	};

	const assignBinding = (binding) => {
		if (!capturingBinding) return;
		const definition = BINDING_DEFINITIONS.find((item) => item.id === capturingBinding);
		if (!isValidBinding(binding, definition)) {
			settingsMessage.textContent = definition.group === "movement"
				? "이동에는 키보드 키만 지정할 수 있습니다."
				: binding === "Mouse0"
					? "좌클릭은 기본 공격에 사용 중입니다."
					: "Esc는 지정할 수 없습니다.";
			return;
		}
		if (Object.entries(draftBindings).some(([id, current]) => id !== capturingBinding && current === binding)) {
			settingsMessage.textContent = "이미 다른 조작에 지정된 키입니다.";
			return;
		}
		draftBindings[capturingBinding] = binding;
		capturingBinding = null;
		settingsMessage.textContent = "변경 내용을 저장하려면 저장을 누르세요.";
		renderSkillBindings();
	};

	const startRound = (nextRound) => {
		round = nextRound;
		spawnRemaining = 2 + round * 2 + ([5, 10].includes(round) ? 1 : 0);
		spawnTimer = 0.8;
		phase = "active";
		phaseTimer = 0;
		showOverlay(`ROUND ${round}`, round === 10 ? "최종 라운드 · 보스 출현" : "적의 공격을 버티고 전장을 정리하세요", false);
		phase = "intro";
		phaseTimer = 1.35;
	};

	const spawnEnemy = () => {
		const bossRound = [5, 10].includes(round);
		const isBoss = bossRound && spawnRemaining === 0;
		const pool = ["stalker"];
		if (round >= 2) pool.push("runner");
		if (round >= 3) pool.push("spitter");
		if (round >= 4) pool.push("brute");
		const kind = isBoss ? "boss" : pool[Math.floor(Math.random() * pool.length)];
		const profiles = {
			stalker: { hp: 38, speed: 72, damage: 9, radius: 17, score: 100 },
			runner: { hp: 27, speed: 122, damage: 8, radius: 14, score: 130 },
			spitter: { hp: 46, speed: 53, damage: 10, radius: 18, score: 160 },
			brute: { hp: 105, speed: 43, damage: 21, radius: 25, score: 220 },
			boss: { hp: 280 + round * 35, speed: 48, damage: 18, radius: 37, score: 1200 }
		};
		const profile = profiles[kind];
		const edge = Math.floor(Math.random() * 4);
		const position = edge === 0
			? { x: 48 + Math.random() * (WORLD_WIDTH - 96), y: 48 }
			: edge === 1
				? { x: WORLD_WIDTH - 48, y: 48 + Math.random() * (WORLD_HEIGHT - 96) }
				: edge === 2
					? { x: 48 + Math.random() * (WORLD_WIDTH - 96), y: WORLD_HEIGHT - 48 }
					: { x: 48, y: 48 + Math.random() * (WORLD_HEIGHT - 96) };
		const difficulty = 1 + (round - 1) * 0.17;
		enemies.push({
			...position,
			kind,
			radius: profile.radius,
			hp: profile.hp * difficulty,
			maxHp: profile.hp * difficulty,
			speed: profile.speed * (1 + (round - 1) * 0.035),
			damage: profile.damage * (1 + (round - 1) * 0.11),
			score: profile.score,
			facing: 0,
			seed: Math.random() * Math.PI * 2,
			hitTime: 0,
			attackWindup: 0,
			attackCooldown: 0.7 + Math.random() * 0.7,
			shotCooldown: 1 + Math.random() * 1.2
		});
	};

	const burst = (x, y, color, count = 8) => {
		for (let index = 0; index < count; index += 1) {
			const angle = Math.random() * Math.PI * 2;
			const speed = 35 + Math.random() * 165;
			particles.push({
				x,
				y,
				vx: Math.cos(angle) * speed,
				vy: Math.sin(angle) * speed,
				radius: 2 + Math.random() * 3,
				life: 0.25 + Math.random() * 0.45,
				maxLife: 0.7,
				color
			});
		}
	};

	const isPlayerMoving = () => {
		const moveX = Number(keys.has("moveRight")) - Number(keys.has("moveLeft"));
		const moveY = Number(keys.has("moveDown")) - Number(keys.has("moveUp"));
		return moveX !== 0 || moveY !== 0;
	};

	const getMovementAngle = () => {
		const moveX = Number(keys.has("moveRight")) - Number(keys.has("moveLeft"));
		const moveY = Number(keys.has("moveDown")) - Number(keys.has("moveUp"));
		if (moveX !== 0 || moveY !== 0) {
			return Math.atan2(moveY, moveX);
		}
		return player.moveAngle ?? player.facing;
	};

	const firePlayerShot = (targetX, targetY, options = {}) => {
		const { speed = 720, radius = 4, damage = 24, color = "#f5d891", spread = 0, count = 1, range = 240, angle: explicitAngle } = options;
		const angle = explicitAngle !== undefined ? explicitAngle : Math.atan2(targetY - player.y, targetX - player.x);
		player.facing = angle;
		for (let index = 0; index < count; index += 1) {
			const shotAngle = angle + (index - (count - 1) / 2) * spread;
			playerShots.push({
				x: player.x + Math.cos(shotAngle) * 22,
				y: player.y + Math.sin(shotAngle) * 22,
				vx: Math.cos(shotAngle) * speed,
				vy: Math.sin(shotAngle) * speed,
				radius,
				damage,
				life: range / speed,
				color
			});
		}
	};

	const damageEnemy = (enemy, damage, color = "#d9eab1") => {
		const enemyIndex = enemies.indexOf(enemy);
		if (enemyIndex === -1) return;
		enemy.hp -= damage;
		enemy.hitTime = 0.16;
		burst(enemy.x, enemy.y, color, 5);
		if (enemy.hp <= 0) {
			enemies.splice(enemyIndex, 1);
			score += enemy.score + round * 10;
			burst(enemy.x, enemy.y, enemy.kind === "boss" ? "#ff9a73" : "#c8e8ae", enemy.kind === "boss" ? 22 : 11);
		}
	};

	const fireTargetedAttack = ({ damage = 24, count = 1, color = "#f5d891", range = TARGETED_ATTACK_RANGE } = {}) => {
		if (phase !== "active") return false;
		let target = null;
		let cursorDistance = Infinity;
		for (const enemy of enemies) {
			if (Math.hypot(enemy.x - player.x, enemy.y - player.y) > range) continue;
			const distanceToCursor = Math.hypot(enemy.x - pointer.x, enemy.y - pointer.y);
			if (distanceToCursor < cursorDistance) {
				target = enemy;
				cursorDistance = distanceToCursor;
			}
		}
		if (!target) return false;

		player.facing = Math.atan2(target.y - player.y, target.x - player.x);
		beams.push({
			startX: player.x,
			startY: player.y,
			endX: target.x,
			endY: target.y,
			life: 0.12,
			maxLife: 0.12,
			color
		});
		for (let index = 0; index < count && enemies.includes(target); index += 1) {
			damageEnemy(target, damage / count, color);
		}
		return true;
	};

	const fireEnemyShot = (enemy, angle, spread = 0, count = 1) => {
		for (let index = 0; index < count; index += 1) {
			const shotAngle = angle + (index - (count - 1) / 2) * spread;
			const speed = enemy.kind === "boss" ? 245 : 205;
			enemyShots.push({
				x: enemy.x + Math.cos(shotAngle) * enemy.radius,
				y: enemy.y + Math.sin(shotAngle) * enemy.radius,
				vx: Math.cos(shotAngle) * speed,
				vy: Math.sin(shotAngle) * speed,
				radius: enemy.kind === "boss" ? 7 : 5,
				damage: enemy.damage,
				life: 3,
				color: enemy.kind === "boss" ? "#ff896f" : "#a8dfc0"
			});
		}
	};

	const hitPlayer = () => {
		if (player.invulnerable > 0 || phase === "gameover" || phase === "won") {
			return;
		}
		player.invulnerable = 0.5;
		if (player.armor > 0) {
			player.armor = 0;
			player.armorRecharge = 5;
			burst(player.x, player.y, "#f0c978", 9);
			return;
		}

		player.lives -= 1;
		if (player.lives <= 0) {
			phase = "gameover";
			showOverlay("GAME OVER", `ROUND ${round}에서 전투 종료 · 점수 ${score}`, true);
		} else {
			player.x = WORLD_WIDTH / 2;
			player.y = WORLD_HEIGHT / 2;
			player.invulnerable = 2;
			enemyShots.length = 0;
		}
	};

	const dash = (angle, distance) => {
		player.x = Math.max(40, Math.min(WORLD_WIDTH - 40, player.x + Math.cos(angle) * distance));
		player.y = Math.max(40, Math.min(WORLD_HEIGHT - 40, player.y + Math.sin(angle) * distance));
		player.facing = angle;
		player.invulnerable = Math.max(player.invulnerable, 0.25);
		dashTime = 0.24;
		burst(player.x, player.y, "#9be6bd", 7);
	};

	const useSkill = (name, cooldown, action) => {
		if ((cooldowns.get(name) || 0) > 0 || phase !== "active") {
			return;
		}
		cooldowns.set(name, cooldown);
		action();
	};

	const updatePointer = (event) => {
		const bounds = canvas.getBoundingClientRect();
		pointer.x = (event.clientX - bounds.left) / scale;
		pointer.y = (event.clientY - bounds.top) / scale;
	};

	const updateEnemy = (enemy, delta) => {
		const dx = player.x - enemy.x;
		const dy = player.y - enemy.y;
		const distance = Math.max(1, Math.hypot(dx, dy));
		const angle = Math.atan2(dy, dx);
		enemy.facing = angle;
		enemy.hitTime = Math.max(0, enemy.hitTime - delta);
		enemy.attackCooldown -= delta;
		enemy.shotCooldown -= delta;

		if (enemy.kind === "spitter" || enemy.kind === "boss") {
			if (distance > 285) {
				enemy.x += Math.cos(angle) * enemy.speed * delta;
				enemy.y += Math.sin(angle) * enemy.speed * delta;
			} else if (distance < 190) {
				enemy.x -= Math.cos(angle) * enemy.speed * delta;
				enemy.y -= Math.sin(angle) * enemy.speed * delta;
			} else {
				const drift = Math.sin(elapsed * 1.7 + enemy.seed) * 0.32;
				enemy.x += Math.cos(angle + Math.PI / 2) * enemy.speed * drift * delta;
				enemy.y += Math.sin(angle + Math.PI / 2) * enemy.speed * drift * delta;
			}
			if (enemy.shotCooldown <= 0) {
				fireEnemyShot(enemy, angle, enemy.kind === "boss" ? 0.3 : 0, enemy.kind === "boss" ? 3 : 1);
				enemy.shotCooldown = enemy.kind === "boss" ? Math.max(0.72, 1.55 - round * 0.045) : Math.max(1.05, 2.2 - round * 0.08);
			}
		} else {
			const reach = enemy.radius + player.radius + (enemy.kind === "brute" ? 12 : 5);
			if (distance > reach) {
				enemy.x += Math.cos(angle) * enemy.speed * delta;
				enemy.y += Math.sin(angle) * enemy.speed * delta;
				enemy.attackWindup = 0;
			} else if (enemy.attackCooldown <= 0 && enemy.attackWindup <= 0) {
				enemy.attackWindup = enemy.kind === "runner" ? 0.2 : 0.34;
			} else if (enemy.attackWindup > 0) {
				enemy.attackWindup -= delta;
				if (enemy.attackWindup <= 0) {
					hitPlayer(enemy.damage);
					enemy.attackCooldown = Math.max(0.48, 1.1 - round * 0.045);
				}
			}
		}
		enemy.x = Math.max(enemy.radius + 18, Math.min(WORLD_WIDTH - enemy.radius - 18, enemy.x));
		enemy.y = Math.max(enemy.radius + 18, Math.min(WORLD_HEIGHT - enemy.radius - 18, enemy.y));
	};

	const update = (delta) => {
		elapsed += delta;
		player.invulnerable = Math.max(0, player.invulnerable - delta);
		if (player.armor === 0) {
			player.armorRecharge = Math.max(0, player.armorRecharge - delta);
			if (player.armorRecharge === 0) player.armor = player.maxArmor;
		}
		dashTime = Math.max(0, dashTime - delta);
		cooldowns.forEach((remaining, name) => cooldowns.set(name, Math.max(0, remaining - delta)));
		shootTimer = Math.max(0, shootTimer - delta);

		if (phase === "intro") {
			phaseTimer -= delta;
			if (phaseTimer <= 0) {
				phase = "active";
				hideOverlay();
			}
		} else if (phase === "clearing") {
			phaseTimer -= delta;
			if (phaseTimer <= 0) {
				if (round === 10) {
					phase = "won";
					showOverlay("YOU SURVIVED", `10개 라운드 돌파 · 점수 ${score}`, true);
				} else {
					startRound(round + 1);
				}
			}
		}

		if (phase !== "gameover" && phase !== "won") {
			let moveX = Number(keys.has("moveRight")) - Number(keys.has("moveLeft"));
			let moveY = Number(keys.has("moveDown")) - Number(keys.has("moveUp"));
			const magnitude = Math.hypot(moveX, moveY);
			if (magnitude > 0) {
				moveX /= magnitude;
				moveY /= magnitude;
				player.x += moveX * 230 * delta;
				player.y += moveY * 230 * delta;
				const moveAngle = Math.atan2(moveY, moveX);
				player.facing = moveAngle;
				player.moveAngle = moveAngle;
			}
			player.x = Math.max(38, Math.min(WORLD_WIDTH - 38, player.x));
			player.y = Math.max(38, Math.min(WORLD_HEIGHT - 38, player.y));
		}

		if (phase === "active") {
			if (mouseButtons.has(0) && shootTimer <= 0) {
				fireTargetedAttack();
				shootTimer = 0.65;
			}
			if (spawnRemaining > 0) {
				spawnTimer -= delta;
				if (spawnTimer <= 0) {
					spawnRemaining -= 1;
					spawnEnemy();
					spawnTimer = Math.max(0.38, 1.05 - round * 0.055);
				}
			}
			enemies.forEach((enemy) => updateEnemy(enemy, delta));

			for (let index = playerShots.length - 1; index >= 0; index -= 1) {
				const shot = playerShots[index];
				shot.x += shot.vx * delta;
				shot.y += shot.vy * delta;
				shot.life -= delta;
				let hitIndex = -1;
				for (let enemyIndex = enemies.length - 1; enemyIndex >= 0; enemyIndex -= 1) {
					const enemy = enemies[enemyIndex];
					if (Math.hypot(shot.x - enemy.x, shot.y - enemy.y) < enemy.radius + shot.radius) {
						hitIndex = enemyIndex;
						break;
					}
				}
				if (hitIndex !== -1) {
					const enemy = enemies[hitIndex];
					playerShots.splice(index, 1);
					damageEnemy(enemy, shot.damage, enemy.kind === "boss" ? "#f4a077" : "#d9eab1");
				} else if (shot.life <= 0 || shot.x < 0 || shot.x > WORLD_WIDTH || shot.y < 0 || shot.y > WORLD_HEIGHT) {
					playerShots.splice(index, 1);
				}
			}

			for (let index = enemyShots.length - 1; index >= 0; index -= 1) {
				const shot = enemyShots[index];
				shot.x += shot.vx * delta;
				shot.y += shot.vy * delta;
				shot.life -= delta;
				if (Math.hypot(shot.x - player.x, shot.y - player.y) < player.radius + shot.radius) {
					hitPlayer(shot.damage);
					enemyShots.splice(index, 1);
				} else if (shot.life <= 0 || shot.x < 0 || shot.x > WORLD_WIDTH || shot.y < 0 || shot.y > WORLD_HEIGHT) {
					enemyShots.splice(index, 1);
				}
			}

			if (spawnRemaining === 0 && enemies.length === 0) {
				phase = "clearing";
				phaseTimer = 2.1;
				showOverlay(round === 10 ? "FINAL WAVE CLEARED" : "ROUND CLEARED", round === 10 ? "전투가 끝났습니다" : "다음 라운드가 곧 시작됩니다");
			}
		}

		for (let index = particles.length - 1; index >= 0; index -= 1) {
			const particle = particles[index];
			particle.x += particle.vx * delta;
			particle.y += particle.vy * delta;
			particle.vx *= 0.96;
			particle.vy *= 0.96;
			particle.life -= delta;
			if (particle.life <= 0) particles.splice(index, 1);
		}
		for (let index = beams.length - 1; index >= 0; index -= 1) {
			beams[index].life -= delta;
			if (beams[index].life <= 0) beams.splice(index, 1);
		}
	};

	const draw = () => {
		context.setTransform(pixelRatio * scale, 0, 0, pixelRatio * scale, 0, 0);
		drawArena(context, elapsed);
		playerShots.forEach((shot) => drawProjectile(context, shot));
		enemyShots.forEach((shot) => drawProjectile(context, shot));
		beams.forEach((beam) => drawBeam(context, beam));
		particles.forEach((particle) => drawParticle(context, particle));
		enemies.forEach((enemy) => drawEnemy(context, enemy, elapsed));
		if (dashTime > 0) {
			context.strokeStyle = `rgba(147, 233, 184, ${dashTime * 3})`;
			context.lineWidth = 4;
			context.beginPath();
			context.arc(player.x, player.y, Math.max(2, player.radius + (0.24 - dashTime) * 95), 0, Math.PI * 2);
			context.stroke();
		}
		drawMovementIndicator(context, player, getMovementAngle(), isPlayerMoving(), elapsed);
		drawPlayer(context, player, elapsed);
	};

	const tick = (time) => {
		if (!canvas.isConnected) {
			resizeObserver.disconnect();
			listeners.abort();
			return;
		}
		if (settingsDialog.open) {
			lastFrame = time;
			draw();
			requestAnimationFrame(tick);
			return;
		}
		const delta = Math.min((time - lastFrame) / 1000 || 0, 0.04);
		lastFrame = time;
		update(delta);
		draw();
		updateHud();
		requestAnimationFrame(tick);
	};

	const tryUseSkill = (name, cooldown, action) => {
		if ((cooldowns.get(name) || 0) > 0 || phase !== "active") return;
		cooldowns.set(name, cooldown);
		action();
	};

	const activateSkill = (skillId) => {
		const skill = SKILL_DEFINITIONS.find((item) => item.id === skillId);
		if (!skill) return;
		tryUseSkill(skillId, skill.cooldown, () => {
			const moveAngle = getMovementAngle();
			if (skillId === "powerShot") {
				firePlayerShot(0, 0, {
					angle: moveAngle,
					speed: 820,
					radius: 7,
					damage: 60,
					color: "#ff9d72",
					range: 360
				});
				burst(player.x + Math.cos(moveAngle) * 22, player.y + Math.sin(moveAngle) * 22, "#ff9d72", 6);
			} else if (skillId === "tripleShot") {
				firePlayerShot(0, 0, {
					angle: moveAngle,
					speed: 760,
					radius: 4.5,
					damage: 20,
					color: "#ffe2a1",
					spread: 0.1,
					count: 3,
					range: 280
				});
			} else if (skillId === "mouseDash") {
				dash(Math.atan2(pointer.y - player.y, pointer.x - player.x), 155);
			} else if (skillId === "scatterShot") {
				firePlayerShot(0, 0, {
					angle: moveAngle,
					speed: 620,
					radius: 5,
					damage: 16,
					color: "#8be0c2",
					spread: 0.18,
					count: 7,
					range: 240
				});
			} else if (skillId === "dash") {
				dash(moveAngle, 145);
			} else if (skillId === "rapidFire") {
				firePlayerShot(0, 0, {
					angle: moveAngle,
					speed: 780,
					radius: 4,
					damage: 16,
					color: "#ffbb76",
					spread: 0.12,
					count: 5,
					range: 250
				});
			}
		});
	};

	window.addEventListener("keydown", (event) => {
		if (!canvas.isConnected || !document.body.classList.contains("is-test-game")) return;
		if (settingsDialog.open) return;
		if (event.target instanceof Element && event.target.closest("input, textarea, select, [contenteditable='true']")) return;
		const movement = MOVEMENT_DEFINITIONS.find((item) => bindings[item.id] === event.code);
		const skill = SKILL_DEFINITIONS.find((item) => bindings[item.id] === event.code);
		if (movement || skill) {
			event.preventDefault();
		}
		if (movement) keys.add(movement.id);
		if (event.repeat) return;
		if (skill) activateSkill(skill.id);
	}, listenerOptions);
	window.addEventListener("keyup", (event) => {
		const movement = MOVEMENT_DEFINITIONS.find((item) => bindings[item.id] === event.code);
		if (movement) keys.delete(movement.id);
		const isSystemKey = ["ControlLeft", "ControlRight", "AltLeft", "AltRight", "MetaLeft", "MetaRight"].includes(event.code);
		if (isSystemKey && BINDING_DEFINITIONS.some((item) => bindings[item.id] === event.code)) event.preventDefault();
	}, listenerOptions);
	canvas.addEventListener("blur", () => {
		keys.clear();
		mouseButtons.clear();
	}, listenerOptions);
	canvas.addEventListener("pointerdown", () => canvas.focus({ preventScroll: true }), listenerOptions);
	canvas.addEventListener("mousemove", updatePointer, listenerOptions);
	canvas.addEventListener("mousedown", (event) => {
		event.preventDefault();
		if (settingsDialog.open) return;
		updatePointer(event);
		if (event.button === 0) {
			mouseButtons.add(0);
			if (shootTimer <= 0 && phase === "active") {
				fireTargetedAttack();
				shootTimer = 0.65;
			}
		} else {
			const skill = SKILL_DEFINITIONS.find((item) => bindings[item.id] === `Mouse${event.button}`);
			if (skill) activateSkill(skill.id);
		}
	}, listenerOptions);
	canvas.addEventListener("mouseup", (event) => mouseButtons.delete(event.button), listenerOptions);
	window.addEventListener("mouseup", (event) => mouseButtons.delete(event.button), listenerOptions);
	window.addEventListener("blur", () => {
		keys.clear();
		mouseButtons.clear();
	}, listenerOptions);
	canvas.addEventListener("contextmenu", (event) => event.preventDefault(), listenerOptions);
	canvas.addEventListener("auxclick", (event) => event.preventDefault(), listenerOptions);
	canvas.addEventListener("dragstart", (event) => event.preventDefault(), listenerOptions);
	canvas.addEventListener("selectstart", (event) => event.preventDefault(), listenerOptions);
	window.addEventListener("dragstart", (event) => {
		if (event.target && event.target.closest && event.target.closest(".page-test-game")) {
			event.preventDefault();
		}
	}, listenerOptions);
	window.addEventListener("selectstart", (event) => {
		if (event.target && event.target.closest && event.target.closest(".page-test-game") && !event.target.closest("input, textarea")) {
			event.preventDefault();
		}
	}, listenerOptions);
	settingsButton.addEventListener("click", () => {
		draftBindings = { ...bindings };
		capturingBinding = null;
		keys.clear();
		mouseButtons.clear();
		settingsMessage.textContent = "이동 또는 스킬을 선택하고 사용할 키를 누르세요.";
		renderSkillBindings();
		settingsDialog.showModal();
	}, listenerOptions);
	window.addEventListener("keydown", (event) => {
		if (!settingsDialog.open || !capturingBinding) return;
		event.preventDefault();
		event.stopPropagation();
		if (event.code === "Escape") {
			capturingBinding = null;
			settingsMessage.textContent = "키 지정이 취소되었습니다.";
			renderSkillBindings();
			return;
		}
		assignBinding(event.code);
	}, { ...listenerOptions, capture: true });
	window.addEventListener("mousedown", (event) => {
		if (!settingsDialog.open || !capturingBinding) return;
		event.preventDefault();
		event.stopPropagation();
		assignBinding(`Mouse${event.button}`);
	}, { ...listenerOptions, capture: true });
	settingsDialog.addEventListener("cancel", (event) => {
		if (!capturingBinding) return;
		event.preventDefault();
		capturingBinding = null;
		settingsMessage.textContent = "키 지정이 취소되었습니다.";
		renderSkillBindings();
	}, listenerOptions);
	settingsDialog.addEventListener("close", () => {
		capturingBinding = null;
		draftBindings = { ...bindings };
		keys.clear();
		mouseButtons.clear();
		lastFrame = performance.now();
	}, listenerOptions);
	settingsSaveButton.addEventListener("click", () => {
		try {
			const movement = Object.fromEntries(MOVEMENT_DEFINITIONS.map((item) => [item.id, draftBindings[item.id]]));
			const skills = Object.fromEntries(SKILL_DEFINITIONS.map((item) => [item.id, draftBindings[item.id]]));
			localStorage.setItem(SKILL_BINDINGS_STORAGE_KEY, JSON.stringify({ movement, skills }));
			bindings = { ...draftBindings };
			updateBindingHints();
			settingsDialog.close();
		} catch {
			settingsMessage.textContent = "설정을 저장하지 못했습니다. 브라우저 저장 공간을 확인해 주세요.";
		}
	}, listenerOptions);
	settingsCancelButton.addEventListener("click", () => settingsDialog.close(), listenerOptions);
	restartButton.addEventListener("click", () => {
		player.armor = player.maxArmor;
		player.armorRecharge = 0;
		player.lives = 3;
		player.x = WORLD_WIDTH / 2;
		player.y = WORLD_HEIGHT / 2;
		player.invulnerable = 1;
		score = 0;
		enemies.length = 0;
		playerShots.length = 0;
		enemyShots.length = 0;
		beams.length = 0;
		particles.length = 0;
		cooldowns.clear();
		keys.clear();
		mouseButtons.clear();
		startRound(1);
		updateHud();
		draw();
		canvas.focus({ preventScroll: true });
	}, listenerOptions);

	resizeObserver = new ResizeObserver(resize);
	resizeObserver.observe(canvas);
	resize();
	startRound(1);
	updateBindingHints();
	updateHud();
	draw();
	canvas.focus({ preventScroll: true });
	requestAnimationFrame(tick);
}
