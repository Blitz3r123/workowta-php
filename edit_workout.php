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
				<a class="item" href="view_schedule.php">
					Schedule
				</a>
				<?php require_once('right_menu.php'); ?>
			</div>
			<p>
				<div class="ui input">
					<input type="text" placeholder="Enter Workout Title" value="Chest Workout 01">
				</div>
			</p>
			<p>
				<div class="ui input">
					<input type="text" id="exerciseName" placeholder="Enter exercise name here">
				</div>
				<span onclick="addExercise()" class="ui primary basic button">
					Add Exercise
				</span>
			</p>
			<div class="ui link cards" id="exerciseList">
				<div class="card">
					<div class=" content">
						<p class=" header">Push Up</p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter rep amount" type="text" value="10">
							<div class=" ui basic label">reps</div>
						</div>
						<p class=" "></p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter set amount" type="text" value="3">
							<div class=" ui basic label">sets</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class=" content">
						<p class=" header">Diamond Push Up</p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter rep amount" type="text" value="10">
							<div class=" ui basic label">reps</div>
						</div>
						<p class=" "></p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter set amount" type="text" value="3">
							<div class=" ui basic label">sets</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class=" content">
						<p class=" header">Bench Press</p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter rep amount" type="text" value="10">
							<div class=" ui basic label">reps</div>
						</div>
						<p class=" "></p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter set amount" type="text" value="3">
							<div class=" ui basic label">sets</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class=" content">
						<p class=" header">Pull Ups</p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter rep amount" type="text" value="10">
							<div class=" ui basic label">reps</div>
						</div>
						<p class=" "></p>
						<div class=" ui right labeled input">
							<input class="  " placeholder="Enter set amount" type="text" value="3">
							<div class=" ui basic label">sets</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ui buttons add_exercise_button">
				<a href="index.php" class="ui button">Cancel</a>
				<div class="or"></div>
				<input type="submit" value="Save Workout" class="ui positive button" onclick="storeData()"></input>
			</div>
		</div>
	</body>
</html>