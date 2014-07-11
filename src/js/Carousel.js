var Carousel = (function(){

	return {
		init: function() {
			this.addHiddenClass();

		},

		addHiddenClass: function() {
			alert('adding');
			$('.bxslider li:hidden').addClass('hidden');
		}
	}
	
})();