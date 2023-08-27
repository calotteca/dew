class Carousel extends HTMLElement {
    constructor() {
        super();
		this.timer = null;
    }

    connectedCallback() {
		this.delay = this.hasAttribute("delay") ? this.getAttribute("delay") : 3000;
		this.first = this.querySelector("article:first-child");
		this.last = this.querySelector("article:last-child");
		this.next = this.querySelectorAll("button.next");
        this.prev = this.querySelectorAll("button.prev");
		this.first.classList.add("active");
		this.autoToNext();
		this.next.forEach(el => {
			el.addEventListener("click", (e) => {
				this.goToNext();
			});	
		});
    }

	goToNext() {
		clearInterval(this.timer);
		const current = this.querySelector(".slide.active");
		const next = this.querySelector(".slide.active ~ .slide");
		if (!!next) {
			current.classList.remove("active");
			next.classList.add("active");
		} else {
			current.classList.remove("active");
			this.first.classList.add("active");
		}
		this.autoToNext();
	}

	autoToNext() {
		this.timer = setInterval(() => {
			this.goToNext();
		}, this.delay);
	}
}

customElements.define("car-ousel", Carousel);