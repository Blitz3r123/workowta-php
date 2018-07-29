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
				<h1 class="ui header">CHEST DAY 01 <div class="ui left pointing label">Targets: Chest, Shoulders</div></h1>
				
				<table class="ui compact table">
					<thead>
						<tr>
							<th>Pre Workout Shakes</th>
							<th>Amount (g)</th>
							<th>Post Workout Shakes</th>
							<th>Amount (g)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Creatine</td>
							<td>2.5</td>
							<td>Dextrose</td>
							<td>30</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>Whey Protein</td>
							<td>30</td>
						</tr>
					</tbody>
				</table>

				<table class="ui striped compact table">
					<thead>
						<tr>
							<th colspan="3">Bench Press</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>15 Reps</td>
							<td>20Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>12 Reps</td>
							<td>25Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>10 Reps</td>
							<td>30Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>8 Reps</td>
							<td>35Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>6 Reps</td>
							<td>40Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
					</tbody>
				</table>

				<table class="ui striped compact table">
					<thead>
						<tr>
							<th colspan="3">Incline Bench Press</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>15 Reps</td>
							<td>20Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>12 Reps</td>
							<td>25Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>10 Reps</td>
							<td>30Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>8 Reps</td>
							<td>35Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
						<tr>
							<td>6 Reps</td>
							<td>40Kg / 44lb</td>
							<td>30 sec Rest</td>
						</tr>
					</tbody>
				</table>


			</div>
		</div>
	</body>
</html>