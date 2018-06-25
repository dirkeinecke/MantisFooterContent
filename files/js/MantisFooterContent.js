$(document).ready(function() {
	var text = 'YOUR TEXT';

	if ($('.footer-content')[0]){
		$('.footer-content address').append('<small>' + text + '</small>');
	} else {
		$('body').append('<p class="text-center" style="margin-top: 20px;">' + text + '</p>');
	}
});
