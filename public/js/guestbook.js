new Vue({

	el: "#guestbook",

	data: {
		messages: [],
		newMessage: {
			name: '',
			message: ''
		},
		submited: false
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
		},

		onSubmitForm: function(event) {
			event.preventDefault();

			var message = this.newMessage;

			this.messages.push(message);

			this.submited = true;

			this.$http.post('/api/messages', message);
		}
	}

});