class SiteSearch extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.veil = this.querySelector(".veil");
		this.input = this.querySelector("input");
		this.toggles = document.querySelectorAll("[site-search-toggle]");
		this.results = this.querySelector(".results");
		this.toggles.forEach((toggle) => {
			toggle.addEventListener("click", () => {
				this.open();
			});
		});

		this.veil.addEventListener("click", () => {
			this.close();
		});

		window.addEventListener("keydown", (event) => {
			if (event.key === "Escape") {
				this.close();
			} else if (event.ctrlKey && event.key == "k" || event.metaKey && event.key == "k") {
				event.preventDefault();
				this.open();
			}
		});
	}

	reset() {
		this.results.innerHTML = "";
		this.input.value = "";
	}

	open() {
		this.setAttribute("active", "");
		this.input.focus();
	}

	close() {
		this.removeAttribute("active");
		this.reset();
	}
}
customElements.define("site-search", SiteSearch);
