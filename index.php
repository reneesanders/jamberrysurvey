<?php

echo "
<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/styles.css'>
<title>Ye Olde Jamberry Survey </title>
	<div class='container'>
		<h1><b><i>Hello Ladies!</b></i></h1>
		<h2>This is going to be a Jamberry Master Survey!</h2>
		<p> I'm learning PHP and html stuffs so that I can do a survey that encompasses the following topics:</p>
		<ul>
			<li>What Jamberry products are best for you?</li>
			<li>Personail Style assessment</li>
			<li>Sample Request</li>
		</ul>
	</div>

	<div id='jamberryproducts' class='container'>
		<h1>What Jamberry products are best for you? </h1> 
	</div>

	<div id='question-one' class ='container'>
		<h1>Do you like to do your nails? </h1>
	</div>

	<div id='question-two' class='container'>
	</div>

	<div id='question-three' class='container'>
	</div>

	<div id='question-four' class='container'>
	</div>

	<div id='question-five' class='container'>
	</div>

	<div id='question-six' class='container'>
	</div>

	<div id='question-seven' class='container'>
	</div>

	<div id='Personail Style' class='container'>
	<h1>Personail Syle</h1> 
	</div>

	<div id='user info' class='container'>
	<h1> <b>Personal Info </b></h2>
		<div>
		<label for='name'>Name:</label>
		<input name='name' type='text' maxlength='50'/>

		<label for='birthday'>Birthday:</label>
		<input name='birthday' type='text'>

		<label for='favoriteholiday'>Favorite Holiday:</label>
		<input name='favoriteholiday' type='text'> 
		</div>
		
		<div class='col-sm-6 container'>
			<textarea name='description'cols='20' rows='4'>Describe yourself...
			</textarea>
		</div>

		<div class='col-sm-6 container'>
			<textarea name='hobbies' cols='20' rows='4'> List your hobbies...
			</textarea>
		</div>
	</div>
	
	<div class='container'>
		<h3><a href='https://reneesanders.jamberry.com'> Shop Now</a></h3>
		<a href='mailto:micromunkey@gmail.com'> <h3> Questions? Email Me! </h3> </a>
	</div>"
?>