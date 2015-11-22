<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		body {
			padding: 2em;
		}

		.error {
			font-weight: bold;
			color: red;
		}

		hr {
			margin: 2em 0;
		}
	</style>
</head>
<body class="container">

	<div id="guestbook">

		<form action="POST" v-on="submit: onSubmitForm">
			<div class="form-group">
				<label for="name">
					Name:
					<span class="error" v-if=" !newMessage.name ">*</span>
				</label>
				<input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
			</div>
					
			<div class="form-group">
				<label for="message">
					Message:
					<span class="error" v-if=" !newMessage.message ">*</span>
				</label>
				<textarea type="text" name="message" id="message" class="form-control"
					v-model="newMessage.message"></textarea>
			</div>
					
			<div class="form-group">
				<button type="submit" class="btn btn-default" v-attr="disabled: errors">Sign Guestbook</button>
			</div>

			<div v-show="submited" class="alert alert-success">
				Thanks
			</div>
		</form>

		<hr>
		<article v-repeat="messages">

			<h3>@{{ name }}</h3>
			
			<div class="body">
				@{{ message }}	
			</div>
		</article>
	</div>

	<script type="text/javascript" src="/js/vendor.js"></script>
	<script type="text/javascript" src="/js/guestbook.js"></script>
</body>
</html>