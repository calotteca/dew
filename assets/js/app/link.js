(function () {
	"use strict";
	crawl();
	window.addEventListener("htmx:load", crawl);
	function crawl() {
		document.querySelectorAll("a").forEach((a) => {
			if (!!a) {
				const currentUrl = window.location.href;
				const linkUrl = a.href;
				const currentDomain = currentUrl.split("/")[2];
				const linkDomain = linkUrl.split("/")[2];
				if (
					linkUrl.includes("mailto:") ||
					linkUrl.includes("tel:") ||
					linkUrl.includes(".pdf")
				) {
					a.setAttribute("target", "_blank");
					a.setAttribute("rel", "noopener")
					htmx.process(a);
				} else if (!linkDomain || currentDomain === linkDomain) {
					// Do nothing
				} else {
					a.setAttribute("target", "_blank");
					a.setAttribute("rel", "noopener")
					htmx.process(a);
				}
			}
		});
	}
})();
