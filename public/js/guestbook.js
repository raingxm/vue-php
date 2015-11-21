new Vue({

	el: "#guestbook",

	data: {
		messages: []
	},

	ready: function() {
		this.fetchMessages();
	},

	methods: {
		fetchMessages: function() {
			this.$http.get('/api/messages', function(messages) {
				this.$set('messages', messages);
			});
		}
	}

});