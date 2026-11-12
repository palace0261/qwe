const ALLOWED_PAGES = new Set(["home", "product", "order", "customer", "image-editor", "stock-portfolio", "test-game"]);

function normalizePage(page) {
	return ALLOWED_PAGES.has(page) ? page : "home";
}

function getPageFromUrl(url = window.location.href) {
	const parsedUrl = new URL(url, window.location.origin);
	const page = parsedUrl.searchParams.get("page") || "home";

	return normalizePage(page);
}

function buildPageUrl(page) {
	const normalized = normalizePage(page);
	const basePath = document.querySelector("#app")?.dataset.basePath || "";
	return `${basePath}/?page=${encodeURIComponent(normalized)}`;
}

function setActiveNav(page) {
	const normalized = normalizePage(page);
	const links = document.querySelectorAll("a[data-page]");

	links.forEach((link) => {
		const isActive = link.dataset.page === normalized;
		link.classList.toggle("is-active", isActive);

		if (isActive) {
			link.setAttribute("aria-current", "page");
		} else {
			link.removeAttribute("aria-current");
		}
	});
}

export function initRouter({ app, initialPage = "home", onPageRendered }) {
	if (!app) {
		return;
	}

	let navigationToken = 0;

	const renderPage = async (page, { pushState = true } = {}) => {
		const normalized = normalizePage(page);
		const requestToken = ++navigationToken;

		try {
			const response = await fetch(`${buildPageUrl(normalized)}&partial=1`, {
				headers: {
					"X-Requested-With": "fetch"
				}
			});

			if (!response.ok) {
				throw new Error(`Failed to load page: ${response.status}`);
			}

			const html = await response.text();

			// Prevent stale responses from replacing a newer navigation result.
			if (requestToken !== navigationToken) {
				return;
			}

			app.innerHTML = html;
			app.dataset.currentPage = normalized;

			if (pushState) {
				history.pushState({ page: normalized }, "", buildPageUrl(normalized));
			}

			setActiveNav(normalized);

			if (typeof onPageRendered === "function") {
				onPageRendered(normalized);
			}
		} catch (error) {
			console.error(error);
			window.location.href = buildPageUrl(normalized);
		}
	};

	document.addEventListener("click", (event) => {
		const link = event.target.closest("a[data-page]");

		if (!link) {
			return;
		}

		if (
			event.defaultPrevented ||
			event.button !== 0 ||
			event.metaKey ||
			event.ctrlKey ||
			event.shiftKey ||
			event.altKey
		) {
			return;
		}

		event.preventDefault();
		const targetPage = link.dataset.page || getPageFromUrl(link.href);
		renderPage(targetPage);
	});

	window.addEventListener("popstate", (event) => {
		const page = event.state?.page || getPageFromUrl();
		renderPage(page, { pushState: false });
	});

	const normalizedInitial = normalizePage(initialPage);
	history.replaceState({ page: normalizedInitial }, "", buildPageUrl(normalizedInitial));
	setActiveNav(normalizedInitial);

	if (typeof onPageRendered === "function") {
		onPageRendered(normalizedInitial);
	}
}
