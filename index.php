<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
		<style>
			body {
					 background-color: #263238;
					 color: white;
			}
			h3 {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container center">
			<br>
			<img src="assets/img/logo.png" alt="Bitcoin [BTC]" width="160">
			<h1 style="font-size: 32px;">Bitcoin [BTC] Preço</h1>
		</div>
		<div id="price">
			<?php include_once 'price.php'; ?>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
		<script src="assets/js/ajaxRequest.js"></script>
	</body>
</html>
