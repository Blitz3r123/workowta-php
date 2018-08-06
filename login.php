<!DOCTYPE html>
<html>
	<head>
		<title>Workowta Login</title>
		<link rel="stylesheet" href="css/login_style.css">
		<link rel="stylesheet" href="css/global_styles.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body style="background-color: #2185d0;">
		<div class="ui container margin-top-10vh">
			<h1 class="ui header" style="width: 50%; margin-left: 25%; text-align: center; color: white;">Workowta</h1>
			<div class="ui margin-top-20vh" style="width: 50%; margin-left: 25%;">
				<div class="row centered-width-50 text-align-center">
					<div class="ui left icon input">
						<input placeholder="Enter Username" type="text">
						<i class="users icon"></i>
					</div>
				</div>
				<div class="row centered-width-50 text-align-center margin-top-1vh">
					<div class="ui left icon input">
						<input placeholder="Enter Password" type="text">
						<i class="lock icon"></i>
					</div>
				</div>
				<div class="row centered-width-50 text-align-center">
					<div class="ui label margin-top-1vh">
						<a href="index.php" class="labeled button">
							Login
							<i class="icon sign in alternate" style="margin-left: 0.3vw;"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="js/global_functions.js"></script>
	</body>
</html>