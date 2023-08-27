class SiteHeader extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
        this.shim = document.querySelector("[data-header-shim]");
        this.setShimHeight();
        window.addEventListener("resize", (event) => {
            this.setShimHeight(); 
        });
    }

    setShimHeight () {
        if (!!this.shim) {
            const h = this.offsetHeight + "px";
            this.shim.style.height = h;
            document.body.style.setProperty("--header-shim", h);
        }
    }

}
customElements.define("site-header", SiteHeader);
