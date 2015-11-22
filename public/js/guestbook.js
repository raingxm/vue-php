new Vue({

	el: "#guestbook",

	data: {
		messages: [],
		newMessage: {
			name: '',
			message: ''
		}
	},

	computed: {
		errors: function() {
			for(key in this.newMessage) {
				if( !this.newMessage[key] ) return true;
			}
			return false;
		}
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