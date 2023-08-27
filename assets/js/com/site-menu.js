class SiteMenu extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.toggles = document.querySelectorAll("[data-menu-toggle]");
        this.toggles.forEach(t => {
            t.addEventListener("click", () => {
                if (this.hasAttribute("open")) {
                    this.removeAttribute("open", "");
                } else {
                    this.setAttribute("open", "");
                }
            });            
        });

		window.addEventListener("keydown", (event) => {
			if (event.key === "Escape" && this.state) {
				this.removeAttribute("open", "");
			}
		});
	}
}
customElements.define("site-menu", SiteMenu);