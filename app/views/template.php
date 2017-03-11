<!DOCTYPE html>
<html>
<head>
	<title>Minimal MVC</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style type="text/css">
		html, body {
			font-family: 'Raleway', sans-serif;
			margin-top: 10%;
			text-align: center;
			font-size: 20px;
		}
		h1 {
			font-size: 80px;
			margin-bottom: 0px;
			color: #bbb;
		}
	</style>
</head>
<body>
	<?php if(isset($content)) echo $content; ?>
</body>
</html>