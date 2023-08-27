(function () {
	"use strict";
	const b = document.body;
	let lastScroll = 0;
	if (window.scrollY < 20) {
		b.classList.add("top");
	}
	window.addEventListener("scroll", () => {
		const currentScroll = window.pageYOffset;
		if (window.scrollY < 20) {
			b.classList.add("top");
		} else {
			b.classList.remove("top");
		}
		if (currentScroll > lastScroll + 10) {
			b.classList.remove("up");
			b.classList.add("down");
		} else if (currentScroll < lastScroll - 10) {
			b.classList.remove("down");
			b.classList.add("up");
		}
		lastScroll = currentScroll;
	});
})();

function scrollOn() {
	document.body.style.removeProperty("overflow");
}

function scrollOff() {
	document.body.style.overflow = "hidden";
}

function scrollToTop(behavior = "smooth") {
	window.scrollTo({ top: 0, behavior: behavior });
}

document.addEventListener("htmx:afterSwap", function (event) {
	if (event.detail.boosted) {
		scrollOn();
	}
});