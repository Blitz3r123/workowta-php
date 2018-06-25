function createExerciseCard(){
	/*
		<div class="card"></div>
	*/
	var card = createElement("div", "card");
	/*
		<div class="content"></div>
	*/
	var content = createElement("div", "content");
	/*
		<p class="header"></p>
	*/
	var header = createElement("p", "header");
	/*
		<p class="header">input value</p>
	*/
	var header_text = document.createTextNode(document.getElementById("exerciseName").value);
	/*
		<div class="ui right labeled input"></div>
	*/
	var input_div = createElement("div", "ui right labeled input");
	/*
		<input type="text" class="" placeholder="Enter rep amount"/>
	*/
	var input = createInput("text", "", "Enter rep amount");
	/*
		<div class="ui basic label"></div>
	*/
	var label_div = createElement("div", "ui basic label");
	/*
		<div class="ui basic label">reps</div>
	*/
	var label_div_text = document.createTextNode("reps");

	/*
		<div class="ui basic label">reps</div>
	*/
	label_div.appendChild(label_div_text);
	/*
		<div class="ui right labeled input">
			<input type="text" class=" "" placeholder="Enter rep amount"/>
		</div>
	*/
	input_div.appendChild(input);
	/*
		<div class="ui right labeled input">
			<input type="text" class=" " placeholder="Enter rep amount"/>
			<div class="ui basic label">reps</div>
		</div>
	*/
	input_div.appendChild(label_div);
	/*
		<p class="header">
			<p class="header">input value</p>
		</p>
	*/
	header.appendChild(header_text);
	/*
		<div class="content">
			<p class="header">
				<p class="header">input value</p>
			</p>
		</div>
	*/
	content.appendChild(header);
	/*
		<div class="content">
			<p class="header">
				<p class="header">input value</p>
			</p>
			<div class="ui right labeled input">
				<input type="text" class=" " placeholder="Enter rep amount"/>
				<div class="ui basic label">reps</div>
			</div>
		</div>
	*/
	content.appendChild(input_div);
	/*
		<div class="card">
			<div class="content">
				<p class="header">
					<p class="header">input value</p>
				</p>
				<div class="ui right labeled input">
					<input type="text" class=" " placeholder="Enter rep amount"/>
					<div class="ui basic label">reps</div>
				</div>
			</div>
		</div>
	*/
	card.appendChild(content);
	return card;
}

function createElement(elementName, className){
	/*
		Function that creates an element using its name and a class can be added
		If no class is added parameter will be ""
	*/
	element = document.createElement(elementName);
	element.className += " " + className;
	return element;	
}

function createInput(type, class_name, placeholder_value){
	var input = createElement("input", " " + class_name);
	input.setAttribute("type", type);
	input.setAttribute("placeholder", placeholder_value);
	return input;
}