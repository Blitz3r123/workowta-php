<!DOCTYPE html>
<html>
	<head>
		<title>Chest Workout 01</title>
		<link rel="stylesheet" href="css/edit_workout_style.css">
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
				<a class="item" href="view_all_workouts.php">
					Workouts
				</a>
				<a class="active item" href="view_schedule.php">
					Schedule
				</a>
				<?php require_once('right_menu.php'); ?>
			</div>
			<div class="ui segment">
				<table class="ui striped celled table text-align-center">
					<thead>
						<tr>
							<th><i class="icon clock outline"></i></th>
							<th>Monday</th>
							<th>Tuesday</th>
							<th>Wednesday</th>
							<th>Thursday</th>
							<th>Friday</th>
							<th>Saturday</th>
							<th>Sunday</th>
						</tr>
					</thead>
					<tbody>
						<?php
	
							for($i = 0; $i < 24; $i++){
								if($i < 10) $i = "0" . $i;
								echo "<tr>";
								echo "<td>" . $i . ":00</td>";
								for($j = 0; $j < 7; $j ++){
									echo "<td></td>";
								}
								echo "</tr>";	
							}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>