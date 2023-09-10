class ActivityModal extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {

        window.addEventListener("hashchange", (event) => {
            if (location.hash.slice(1) === this.id) {
                this.setAttribute("open", "");
            }
        })

        this.querySelector(".close", (event) => {
            this.removeAttribute("open")
        })
	}
}
customElements.define("activity-modal", ActivityModal);
d