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
				<h1 class="ui header">CHEST DAY 01</h1>

				<table class="ui striped compact table">
					<thead>
						<tr>
							<th colspan="4" style="text-align: center;"><h3 class="ui header">Bench Press</h3></th>
						</tr>
						<tr>
							<th>Rep Count</th>
							<th>Weight (Kg)</th>
							<th>Weight (lb)</th>
							<th>Rest Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>15</td>
							<td>20</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>12</td>
							<td>25</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>10</td>
							<td>30</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>8</td>
							<td>3</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>6</td>
							<td>4</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
					</tbody>
				</table>

				<table class="ui striped compact table">
					<thead>
						<tr>
							<th colspan="4" style="text-align: center;"><h3 class="ui header">Incline Bench Press</h3></th>
						</tr>
						<tr>
							<th>Rep Count</th>
							<th>Weight (Kg)</th>
							<th>Weight (lb)</th>
							<th>Rest Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>15</td>
							<td>20</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>12</td>
							<td>25</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>10</td>
							<td>30</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>8</td>
							<td>3</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
						<tr>
							<td>6</td>
							<td>4</td>
							<td>44</td>
							<td>30 sec</td>
						</tr>
					</tbody>
				</table>


			</div>
		</div>
	</body>
</html>