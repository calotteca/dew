class queueCard extends HTMLElement {
	constructor() {
		super();
		this.interval = null;
	}

	connectedCallback() {
		this.interval = setInterval(() => {
			this.update();
		}, 100);
	}

	disconnectedCallback() {
		clearInterval(this.interval);
	}

	update() {
		const timestamp = this.dataset.ts;
		const now = Date.now() / 1000;
		const duration = now - timestamp;
		const formattedDuration = this.format(duration);
		this.querySelector(".time").innerHTML = formattedDuration;
	}

	format(timestamp) {
		const minutes = Math.floor(timestamp / 60);
		const seconds = Math.floor(timestamp % 60);
		const formattedMinutes = String(minutes).padStart(2, "0");
		const formattedSeconds = String(seconds).padStart(2, "0");
		return `${formattedMinutes}:${formattedSeconds}`;
	}
}
customElements.define("queue-card", queueCard);
