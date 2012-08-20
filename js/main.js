$(document).ready(function() {

	//.parallax(xPosition, adjuster, inertia, outerHeight) options:
	//xPosition - Horizontal position of the element
	//adjuster - y position to start from
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport

	$('#intro').parallax("50%", 300, 0.1, true);
	$('#about').parallax("50%", 2200, 0.1, true);
	$('#between').parallax("50%", 2200, 0.1, true);
	$('.stars1').parallax("50%", 4000, 0.3, true);
	$('.stars2').parallax("50%", 4000, 0.4, true);
	$('.stars3').parallax("50%", 4200, 0.2, true);
	$('.stars4').parallax("50%", 3500, -0.4, true);
	$('.stars5').parallax("50%", 3500, 0.7, true);
	$('.stars6').parallax("50%", 3200, -0.2, true);

	$('.stars1b').parallax("50%", 2000, 0.3, true);
	$('.stars2b').parallax("50%", 2000, 0.4, true);
	$('.stars3b').parallax("50%", 2200, 0.2, true);
	$('.stars4b').parallax("50%", 2500, -0.4, true);
	$('.stars5b').parallax("50%", 2500, 0.7, true);
	$('.stars6b').parallax("50%", 2200, -0.2, true);

	$('#sponsors').parallax("50%", 5500, 0.1, true);
	$('#results').parallax("50%", 6500, 0.4, true);

		var deck = new $.scrolldeck({
		slides: '.slide',
		buttons: '.nav-button',
		duration: 2000,
		easing: 'easeInOutExpo'
	});
});