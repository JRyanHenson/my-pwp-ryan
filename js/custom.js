$(document).ready(function() {

	// initialize particleground on element by id
	$("#particleground").particleground({
		dotColor: '#5cbdaa',
		lineColor: '#5cbdaa'
	});
	$('body').scrollspy({ target: '.navbar-fixed-top' })
});