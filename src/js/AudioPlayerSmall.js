var AudioPlayerSmall = {

	settings: {
		control: $('.quiz .audio-control'),
		player: $('.quiz .audio-player')
	},

	init: function(){
		this.bindUIActions();
	},

	bindUIActions: function(){
		this.settings.control.on('click', function(){
			var playerId = $(this).parent();
			AudioPlayerSmall.toggleAudio(playerId);
		});
		this.settings.player.on('playing', function(){
			var playerId = $(this).parent();
			AudioPlayerSmall.playing(playerId);
		});
		this.settings.player.on('ended pause', function(){
			var playerId = $(this).parent();
			AudioPlayerSmall.ended(playerId);
		})
	},

	toggleAudio: function(playerId){
		this.settings.player.trigger('pause');
		playerId.find('.audio-player').prop('currentTime',0);
		playerId.find('.audio-player').trigger('play');
	},
	playing: function(playerId){
		playerId.find('.audio-control').addClass('playing');
	},
	ended: function(playerId){
		playerId.find('.audio-control').removeClass('playing');
	}
};