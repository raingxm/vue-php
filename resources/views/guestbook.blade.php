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
	</style>
</head>
<body class="container">

	<div id="guestbook">

		<form action="POST" v-on="submit: onSumbitForm">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
			</div>
					
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea type="text" name="message" id="message" class="form-control"
					v-model="newMessage.message"></textarea>
			</div>
					
			<div class="form-group">
				<button type="submit" class="btn btn-default" v-attr="disabled: errors">Sign Guestbook</button>
			</div>
		</form>

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