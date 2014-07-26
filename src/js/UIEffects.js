var UIEffects = (function(){

	var s  = {
		registerNotification: $('.page-login .notification'),
		quizOption: $('.quiz .answer-wrap'),
		quizWindowCorrect: $('.notification .correct'),
		quizWindowWrong: $('.notification .wrong'),
		quizWindowComplete: $('.notification .word-complete'),
		readMoreFront: $('.page-index #readOn'),
		contentFront: $('.page-index .main')
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
			s.readMoreFront.click(this.scrollWindowToContent);
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
				$('.shade .correct').fadeIn().find('audio').get(0).play();
			}
			if ($(this).hasClass('wrong')) {
				$('.shade').fadeIn();
				$('.shade .wrong').fadeIn().find('audio').get(0).play();;
			}
			if ($(this).hasClass('complete')) {
				$('.shade').fadeIn();
				$('.shade .word-complete').fadeIn().find('audio').get(0).play();
			}
		},

		removeResult: function() {
			$('.shade .content:visible').find('audio').get(0).pause();
			$('.shade .content:visible').find('audio').get(0).currentTime = 0;
			$('.shade').fadeOut();
			$('.content').fadeOut();
		},

		goToLink: function(){
			var link = $(this).find('a').attr('href');
			if(link){
				window.location = link;
			} else {
				UIEffects.removeResult();
			}
		},

		scrollWindowToContent: function(e){
			e.preventDefault();
			$(window).scrollTo($('.main'), 800, {offset: -50});

		}

	};

})();