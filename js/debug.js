$(document).ready(function() {
	var touch = window.ontouchstart ? 'true' : 'false';
	$('body').append(
		'<div class="debug">' + 
		'Touch: ' + touch + 
		'</div>'
	);
	$('.debug').css('font-fmaily', 'monospaced').css('background', 'green').css('float', 'left').fadeTo(1, 0.75);
});