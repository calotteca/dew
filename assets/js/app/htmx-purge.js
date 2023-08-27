(function () {
	"use strict";
	const url = new URL(window.location.href);
	if (url.searchParams.has('purge')) {
		localStorage.clear();
		alert("HTMX cache purged.");
	}
})();
