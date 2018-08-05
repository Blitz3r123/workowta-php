<!DOCTYPE html>
<html>
	<head>
		<title>Add a Workout</title>
		<link rel="stylesheet" href="css/add_advanced_workout_style.css">
		<link rel="stylesheet" href="css/global_styles.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body onload="prefunction()">
		<div class="workout_choice" id="workoutChoiceDiv">
			<a href="add_basic_workout.php" class="ui button basic primary">Basic</a>
			<a href="add_advanced_workout.php" class="ui button basic negative">Advanced</a>
		</div>
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

				<div class="ui two column grid">
					<div class="row">
						<div class="column">
							<table class="ui compact red table">
								<thead>
									<tr>
										<th>Pre Workout Shakes</th>
										<th>Amount (g)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="ui input">
												<input type="text" placeholder="Supplement Name" value="Creatine">
											</div>
										</td>
										<td>
											<div class="ui right labeled input">
												<input type="text" placeholder="Amount in grams" value="5">
												<div class="ui basic label">
													g
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="ui input">
												<input type="text" placeholder="Supplement Name" value="">
											</div>
										</td>
										<td>
											<div class="ui right labeled input">
												<input type="text" placeholder="Amount in grams" value="">
												<div class="ui basic label">
													g
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="text-align: center;" colspan="2">
											<div class="ui icon button" id="addPreWorkoutPopUp" data-tooltip="Add a Pre Workout Shake" data-position="right center">
												<i class="plus icon" id="addPreWorkoutShake"></i>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column">
							<table class="ui compact red table">
								<thead>
									<tr>
										<th>Post Workout Shakes</th>
										<th>Amount (g)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="ui input">
												<input type="text" placeholder="Supplement Name" value="Whey Protein">
											</div>
										</td>
										<td>
											<div class="ui right labeled input">
												<input type="text" placeholder="Amount in grams" value="30">
												<div class="ui basic label">
													g
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="ui input">
												<input type="text" placeholder="Supplement Name" value="">
											</div>
										</td>
										<td>
											<div class="ui right labeled input">
												<input type="text" placeholder="Amount in grams" value="">
												<div class="ui basic label">
													g
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td style="text-align: center;" colspan="2">
											<div class="ui icon button" id="addPostWorkoutPopUp" data-tooltip="Add a Post Workout Shake" data-position="right center">
												<i class="plus icon" id="addPostWorkoutShake"></i>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
				<table class="ui striped compact table">
					<tbody>
						<tr>
							<td style="text-align: center;">
								<div class="ui icon button" id="addExercisePopUp" data-tooltip="Add An Exercise" data-position="right center">
									<i class="plus icon" id="addExercise"></i>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="ui striped structured green compact table">
					<thead>
						<tr>
							<th class="ui fluid input">
								<input
									type="text" 
									class="ui input" 
									value="Bench Press"
									placeholder="Enter Exercise Title">
							</th>
							<th>or</th>
							<th>Search:</th>
							<th>
								<div class="ui category search">
									<div class="ui icon input">
										<input class="prompt" placeholder="Search exercises..." type="text">
										<i class="search icon"></i>
									</div>
									<div class="results"></div>
								</div>
							</th>
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
							<td>15</td>
							<td>15</td>
							<td>15</td>
						</tr>
						<tr>
							<td colspan="4" style="text-align: center;"><i class="plus icon" id="addExerciseRow"></i></td>
						</tr>
					</tbody>
				</table>

				<table class="ui striped blue compact table">
					<thead>
						<tr>
							<th colspan="4" style="text-align: center;"><h3 class="ui header">Bench Press<div class="ui left pointing label">Chest</div></h3></th>
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

				<table class="ui striped blue compact table">
					<thead>
						<tr>
							<th colspan="4" style="text-align: center;"><h3 class="ui header">Incline Bench Press<div class="ui left pointing label">Chest and Shoulders</div></h3></th>
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
			
		<script src="js/global_functions.js"></script>
		<script>
			function storeData(){
				var exercise_card_amount = document.documentElement.childNodes[2].childNodes[1].childNodes[20].children.length;

				for(i = 0; i < exercise_card_amount; i++){
					/*
						card:
						console.log(document.documentElement.childNodes[2].childNodes[1].childNodes[20].children[i]);
					*/
					var exercise_title_value = document.documentElement.childNodes[2].childNodes[1].childNodes[20].children[i].childNodes[0].childNodes[0].childNodes[0].nodeValue;
					var rep_value = document.documentElement.childNodes[2].childNodes[1].childNodes[20].children[i].childNodes[0].childNodes[1].childNodes[0].value; 
					var set_value = document.documentElement.childNodes[2].childNodes[1].childNodes[20].children[i].childNodes[0].childNodes[3].childNodes[0].value; 

					console.log(exercise_title_value + "= Reps: " + rep_value + ". Sets: " + set_value + ".");
				}
			}

			function prefunction(){
				hideElement('workoutChoiceDiv');
			}

			$(document).ready(function(){
				$('#addExercisePopUp').popup();
			});

		</script>
		<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="js/global_functions.js"></script>
	</body>
</html>