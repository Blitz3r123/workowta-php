<!DOCTYPE html>
<html>
	<head>
		<title>Add a Workout</title>
		<link rel="stylesheet" href="css/add_workout_style.css">
		<?php require_once('dependencies.php'); ?>
	</head>
	<body>
		<div class="ui container">
			<form action="">
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
			</form>
		</div>

		<script>
			function addExercise(){
				/*
					Overview of elements and variable names:
					LINode: LI element to be added to the UL element
					anchorNode: <p></p> element to be inserted into the li element
					text: text to be inserted into the paragraph tag
				*/
				//Create the LI element which will be empty
				var LINode = createElement("div", "card");
				//Set the class of the LI element created
				LINode.className += " exercise_input";
				//Create the paragraph tag that will contain the text within it
				var anchorNode = document.createElement("p", "");
				//Create the text that will go into the paragraph tag
				var text = document.createTextNode(document.getElementById("exerciseName").value);
				//Create and configure input element
				var rep_input = createElement("input", "");
				rep_input.setAttribute("type", "number");
				rep_input.setAttribute("min", "1");
				rep_input.setAttribute("max", "1000");
				rep_input.className += "rep_input";

				//Create div
				var input_div = createElement("div", "ui input");
				input_div.appendChild(rep_input);

				//Append the text to the paragraph tag making the text a link
				anchorNode.appendChild(text);
				//Append the text in the paragraph tag to the li element 
				LINode.appendChild(anchorNode);
				LINode.appendChild(input_div);
				//Append the li element with the link in it to the ul list
				document.getElementById("exerciseList").appendChild(LINode);
				//Clear the input after exercise is added to the list
				document.getElementById("exerciseName").value = "";
			}

			function createElement(elementName, className){
				element = document.createElement(elementName);
				element.className += " " + className;
				return element;	
			}

		</script>

	</body>
</html>