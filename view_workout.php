<!DOCTYPE html>
<html>
	<head>
		<title>Chest Workout 01</title>
		<link rel="stylesheet" href="css/view_workout_style.css">
		<link rel="stylesheet" href="css/global_styles.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body>
		<div class="ui container margin-top-10vh">
			<h1 class="ui header">Workowta</h1>
			<div class="ui pointing menu">
				<a class="item" href="index.php">
					Home
				</a>
				<a class="active item" href="view_all_workouts.php">
					Workouts
				</a>
				<a class="item" href="view_schedule.php">
					Schedule
				</a>
				<?php require_once('right_menu.php'); ?>
			</div>
			<div class="ui segment">
				<div class="ui celled list">
					<h3 class="header margin-bottom-5vh">Chest Workout 01 <a href="add_workout.php" class="secondary basic ui button right floated">Edit This Workout</a></h3>
					<div class="item">
						<div class="content">
							<div class="header">Push Up</div>
							10 reps 3 sets
						</div>
					</div>
					<div class="item">
						<div class="content">
							<div class="header">Diamond Push Up</div>
							10 reps 3 sets
						</div>
					</div>
					<div class="item">
						<div class="content">
							<div class="header">Bench Press</div>
							10 reps 3 sets
						</div>
					</div>
					<div class="item">
						<div class="content">
							<div class="header">Pull Ups</div>
							10 reps 3 sets
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>