<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
</head>
<body>
	<div id="guestbook">
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