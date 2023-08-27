(function () {
	"use strict";
	const sel = "[in]";
	const once = true;
	const Observer = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.setAttribute("in", "1");
			} else if (!once) {
				entry.target.setAttribute('in', "0");
			}
		});
	});	

	const Watch = function () {
		if (sel) {
			document.querySelectorAll(sel).forEach((el) => {
				Observer.observe(el);
			});			
		}
	};	
	const ObserveMutation = function () {
		let Mutation = new MutationObserver(Watch);
		Mutation.observe(document.body, { childList: true, subtree: true });
	};
	Watch();
	ObserveMutation();
})();