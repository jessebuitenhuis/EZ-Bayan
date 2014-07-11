//@prepros-prepend AudioPlayerSmall.js
//@prepros-prepend Keyboard.js
//@prepros-prepend ActivePage.js
//@prepros-prepend UIEffects.js
//@prepros-prepend jquery.scrollTo.min.js
$(document).ready(function(){
	
	//Init Modules
	AudioPlayerSmall.init();
	Keyboard.init();
	ActivePage.init();
	UIEffects.init();

	$('.bxslider').bxSlider({
		mode: 'fade',
		auto: true,
		pause: 3000,
		prevText: '<i class="fa fa-chevron-left"></i>',
		nextText: '<i class="fa fa-chevron-right"></i>'
	});
});