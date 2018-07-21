<!DOCTYPE html>
<html>
	<head>
		<title>Workowta</title>
		<link rel="stylesheet" href="css/view_all_workouts_style.css">
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
				<h3 class="ui header margin-bottom-5vh" style="">Here are all your workouts: <a href="add_workout.php" class="secondary basic ui button right floated">Create a Workout</a></h3>
				<div class="ui grid">
					<div class="four wide column">
						<div class="ui card">
							<div class="content">
								<a href="view_workout.php" class="header text-align-center"><p><i class="ui icon outline file alternate"></i>Back Workout</p></a>
							</div>
						</div>
					</div>
					<div class="four wide column">
						<div class="ui card">
							<div class="content">
								<a href="view_workout.php" class="header text-align-center"><p><i class="ui icon outline file alternate"></i>Chest Workout</p></a>
							</div>
						</div>
					</div>
					<div class="four wide column">
						<div class="ui card">
							<div class="content">
								<a href="view_workout.php" class="header text-align-center"><p><i class="ui icon outline file alternate"></i>Bicep Workout</p></a>
							</div>
						</div>
					</div>
					<div class="four wide column">
						<div class="ui card">
							<div class="content">
								<a href="view_workout.php" class="header text-align-center"><p><i class="ui icon outline file alternate"></i>Tricep Workout</p></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>