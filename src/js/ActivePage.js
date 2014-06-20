var ActivePage = (function(){

	var s = {
		link: $('footer nav a')
	}

	return {
		init: function(){
			this.compare();
		},
		curURL: function(){
			var curURL = window.location.href;
			var parts = curURL.split('/');
			return parts[parts.length-1];
		},
		compare: function(){
			var self = this;
			s.link.each(function(){
				var href = $(this).attr('href');
				if (href == self.curURL()) {
					$(this).addClass('active');
				}
			});
		}
	};

})();