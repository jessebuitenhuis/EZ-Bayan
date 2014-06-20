var Keyboard = (function(){

	var s;
	var obj = Keyboard;

	return {

		settings: {
			letter: $('.quiz .letter-input .letter'),
			answerField: $('.letter-answer .user-input')
		},

		init: function(){
			s = this.settings;
			this.bindUIActions();
		},

		bindUIActions: function(){
			s.letter.on('click', {self: this}, this.chooseInput);
		},

		chooseInput: function(e){
			e.preventDefault();
			var self = e.data.self;
			$(this).hasClass('backspace') ? self.deleteLetter.apply(this) : self.inputLetter.apply(this);
		},

		inputLetter: function(){
			var userInput = $(this).text();
			s.answerField.val(function(index, val){
				return val + userInput;
			});
		},

		deleteLetter: function(){
			s.answerField.val(function(index, val){
				return val.substr(0, val.length-1);
			});
		}
	};
})();
