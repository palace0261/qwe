import { initProduct } from "./product.js";
import { initOrder } from "./order.js";
import { initImageEditor } from "./image-editor.js";
import { initTestGame } from "./test-game.js";
import { initRouter } from "./router.js";

function preventGameMouseNavigation(event) {
    if (
        document.body.classList.contains("is-test-game") &&
        (event.button === 3 || event.button === 4)
    ) {
        event.preventDefault();
    }
}

["mousedown", "mouseup", "click", "auxclick"].forEach((eventName) => {
    window.addEventListener(eventName, preventGameMouseNavigation, true);
});

function initHome() {
    const metrics = document.querySelectorAll(".metric[data-count]");

    metrics.forEach((metric) => {
        const target = Number(metric.dataset.count || 0);
        let current = 0;
        const duration = 500;
        const intervalMs = 20;
        const steps = Math.max(1, Math.floor(duration / intervalMs));
        const increment = Math.max(1, Math.ceil(target / steps));

        const timer = setInterval(() => {
            current += increment;

            if (current >= target) {
                current = target;
                clearInterval(timer);
            }

            metric.textContent = String(current);
        }, intervalMs);
    });
}

export function initPage(page) {
	document.body.classList.toggle("is-test-game", page === "test-game");

    if (page === "home") {
        initHome();
    }

    if (page === "product") {
        initProduct();
    }

    if (page === "order") {
        initOrder();
    }

    if (page === "image-editor") {
        initImageEditor();
    }

    if (page === "test-game") {
        initTestGame();
    }

}

document.addEventListener("DOMContentLoaded", () => {
    const app = document.querySelector("#app");

    if (!app) {
        return;
    }

    initRouter({
        app,
        initialPage: app.dataset.currentPage || "home",
        onPageRendered: initPage
    });
});