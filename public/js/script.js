const Links = document.querySelectorAll("[data-starter-position]");
	
for (var i = 0; i < Links.length; i++) {
	Links[i].addEventListener("click", smoothScroll);
}



 function smoothScroll(event) {
 	const targetId = event.currentTarget.getAttribute("href");
 	targetPosition = document.querySelector(targetId).offsetTop;
 	const startPosition = window.pageYOffset;
 	let distance = targetPosition - startPosition;
 	const duration = 2000;
 	let start = null;

 	window.requestAnimationFrame(step);

 	function step(timestamp) {
 		if (!start) start = timestamp;
 		const progress = timestamp - start;
 		window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
 		if (progress < duration) window.requestAnimationFrame(step);
 	}
 }

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};


