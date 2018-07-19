<!DOCTYPE html>
<html>
	<head>
		<title>Workowta</title>
		<link rel="stylesheet" href="css/index_style.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body>
		<div class="ui sidebar">
			<div class="ui left demo vertical inverted sidebar labeled icon menu">
				<a class="item">
					<i class="home icon"></i>
					Home
				</a>
				<a class="item">
					<i class="block layout icon"></i>
					Topics
				</a>
				<a class="item">
					<i class="smile icon"></i>
					Friends
				</a>
			</div>
		</div>
		<div class="pusher">
			<div class="ui container margin-top-10vh">
				<h1 class="ui header">Workowta</h1>
				<div class="ui pointing menu">
					<a class="active item">
						Home
					</a>
					<a class="item" href="view_all_workouts.php">
						Workouts
					</a>
					<a class="item" href="view_schedule.php">
						Schedule
					</a>
					<div class="right menu">
						<div class="item">
							<div class="ui transparent icon input">
								<input placeholder="Search..." type="text">
								<i class="search link icon"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segment">
					<h3 class="ui header">Recent Activities:</h3>
					<div class="ui large feed">
						<div class="event">
							<div class="label">
								<i class="pencil icon"></i>
							</div>
							<div class="content">
								<div class="summary">
									You created 
									<a href="view_workout.php?workout_id=3">Back Workout 01</a>
									<div class="date">
										1 Hour Ago
									</div>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="label">
								<i class="pencil icon"></i>
							</div>
							<div class="content">
								<div class="summary">
									You created 
									<a href="view_workout.php?workout_id=3">Chest Workout 01</a>
									<div class="date">
										1 Hour Ago
									</div>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="label">
								<i class="pencil icon"></i>
							</div>
							<div class="content">
								<div class="summary">
									You created 
									<a href="view_workout.php?workout_id=3">Bicep Workout 01</a>
									<div class="date">
										1 Hour Ago
									</div>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="label">
								<i class="pencil icon"></i>
							</div>
							<div class="content">
								<div class="summary">
									You created 
									<a href="view_workout.php?workout_id=3">Tricep Workout 01</a>
									<div class="date">
										1 Hour Ago
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
	</body>
</html>