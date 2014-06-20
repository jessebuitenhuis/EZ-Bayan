var UIEffects = (function(){

	var s  = {
		registerNotification: $('.page-login .notification'),
		quizOption: $('.quiz .answer-wrap'),
		quizWindowCorrect: $('.notification .correct'),
		quizWindowWrong: $('.notification .wrong')
	};

	return {

		init: function(){
			this.bindUIActions();
			this.notifications();
		},

		bindUIActions: function(){
			s.registerNotification.find('i').on('click', this.hideNotification);
			s.quizOption.click(this.showResult);
			s.quizWindowWrong.click(this.removeResult);
			s.quizWindowCorrect.click(this.goToLink);
		},

		notifications: function(){
			s.registerNotification.delay(200).slideDown();
		},

		hideNotification: function(){
			$(this).parent().slideUp(function(){
				$(this).remove();
			});
		},

		showResult: function(){
			if ($(this).hasClass('correct')) {
				$('.shade').fadeIn();
				$('.shade .correct').fadeIn();
			}
			if ($(this).hasClass('wrong')) {
				$('.shade').fadeIn();
				$('.shade .wrong').fadeIn();
			}
		},

		removeResult: function() {
			$('.shade').fadeOut();
			$('.content').fadeOut();
		},

		goToLink: function(){
			var link = $(this).find('a').attr('href');
			window.location = link;
		}

	};

})();