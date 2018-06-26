<!DOCTYPE html>
<html>
	<head>
		<title>Add a Workout</title>
		<link rel="stylesheet" href="css/add_workout_style.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body onload="prefunction()">
		<div class="ui container">
			<p>
				<h1 class="ui header">Add A Workout</h1>
			</p>
			<p>
				<div class="ui input">
					<input type="text" placeholder="Enter Workout Title">
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
			<!-- <ul id="exerciseList">
			</ul> -->
			<div class="ui link cards" id="exerciseList">
				
			</div>
			<div class="ui buttons add_exercise_button">
				<a href="index.php" class="ui button">Cancel</a>
				<div class="or"></div>
				<input type="submit" value="Save Workout" class="ui positive button"></input>
			</div>
		</div>
	
		<script src="js/global_functions.js"></script>
		<script>
			function prefunction(){
				var input = document.getElementById("exerciseName");

				input.addEventListener("keydown", function(e){
					if (e.keyCode === 13) {
						addExercise();
					}
				});
			}

			function addExercise(){
				var card = createExerciseCard();
				document.getElementById("exerciseList").appendChild(card);
				document.getElementById("exerciseName").value = "";
			}
			
			function setCardContent(){
				var contentDiv = createElement("div", "content");
				return contentDiv;
			}

		</script>

	</body>
</html>