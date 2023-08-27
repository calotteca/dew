(function () {
	"use strict";
	const SetImgBehavior = function () {
		document.querySelectorAll("img").forEach((el) => {
			el.onload = function () {
				el.setAttribute("loaded", "");
			};
			if (el.complete) {
				el.setAttribute("loaded", "");
			}
		});
	};
	const ObserveMutation = function () {
		let o = new MutationObserver(SetImgBehavior);
		o.observe(document.body, { childList: true, subtree: true });
	};

	// Safari object-fit fix
	const ResetSRC = function () {
		document.addEventListener("htmx:load", (event) => {
			document.querySelectorAll("img").forEach((el) => {
				const src = el.getAttribute("src");
				el.removeAttribute("src");
				el.setAttribute("src", src);
			});
			document.querySelectorAll("video[autoplay]").forEach((v) => {
				v.load();
			});
		});
	}

	SetImgBehavior();
	ObserveMutation();
	ResetSRC();
})();
