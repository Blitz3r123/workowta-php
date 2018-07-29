<!DOCTYPE html>
<html>
	<head>
		<title>Add a Workout</title>
		<link rel="stylesheet" href="css/add_workout_style.css">
		<link rel="stylesheet" href="css/global_styles.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body onload="prefunction()">
		<div class="ui container margin-top-10vh">
			<h1 class="ui header">Workowta</h1>
			<div class="ui pointing menu">
				<a class="item" href="index.php">
					Home
				</a>
				<a class="item" href="view_all_workouts.php">
					Workouts
				</a>
				<a class="item" href="view_schedule.php">
					Schedule
				</a>
				<?php require_once('right_menu.php'); ?>
			</div>
			<div class="ui segment">
				<table class="ui striped table">
					<tbody>
						<tr><h1 class="ui">Chest Day 01</h1></tr>
						<tr>
							<td>15 Reps</td>
							<td>Bench Press</td>
							<td>20Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>12 Reps</td>
							<td>Bench Press</td>
							<td>25Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>10 Reps</td>
							<td>Bench Press</td>
							<td>30Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>8 Reps</td>
							<td>Bench Press</td>
							<td>35Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>6 Reps</td>
							<td>Bench Press</td>
							<td>40Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>15 Reps</td>
							<td>Inclined Bench Press</td>
							<td>20Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>12 Reps</td>
							<td>Inclined Bench Press</td>
							<td>25Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>10 Reps</td>
							<td>Inclined Bench Press</td>
							<td>30Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>8 Reps</td>
							<td>Inclined Bench Press</td>
							<td>35Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>6 Reps</td>
							<td>Inclined Bench Press</td>
							<td>40Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>