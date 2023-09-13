class NutritionModal extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {

        if (location.hash.slice(1) === this.id) {
            this.open();
        }

		window.addEventListener("hashchange", (event) => {
			if (location.hash.slice(1) === this.id) {
				this.open();
			} else if (event.oldURL === this.id) {
				this.close();
			}
		});

		this.querySelector(".close").addEventListener("click", (event) => {
			this.close();
		});

		this.querySelector(".veil").addEventListener("click", (event) => {
			this.close();
		});

		this.querySelectorAll(".action").forEach((el) => {
			el.addEventListener("click", (event) => {
				this.close();
			});
		});
	}

    open() {
        this.setAttribute("open", "");
    }

	close() {
		this.removeAttribute("open");
		window.location.hash = "";
	}
}
customElements.define("nutrition-modal", NutritionModal);
