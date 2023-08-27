class BtnBack extends HTMLElement {
	constructor() {
		super()
	}

	connectedCallback() {
		this.addEventListener("click", () => {
			history.back()
		})
	}
}
customElements.define("btn-back", BtnBack)
