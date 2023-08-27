class BtnCopy extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		const btn = this;
		btn.addEventListener("click", () => {
			const start = performance.now();
			navigator.clipboard.writeText(window.location.href).then(
				function () {
					const end = performance.now();
					btn.classList.add("success");
					const duration = end - start;
					const delay = Math.max(2000 - duration, 0);
					setTimeout(() => {
						btn.classList.remove("success");
					}, delay);
				},
				function (err) {
					console.log("🤬");
				}
			);
		});
	}
}

customElements.define("btn-copy", BtnCopy);
