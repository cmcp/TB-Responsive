$(document).ready(function() {
	var touch = !!('ontouchstart' in window);
	$('body').append(
		'<div class="debug">' + 
		'Touch: ' + touch + 
		'</div>'
	);
	$('.debug').css('font-fmaily', 'monospaced').css('background', 'green').css('float', 'left').fadeTo(1, 0.75);
});