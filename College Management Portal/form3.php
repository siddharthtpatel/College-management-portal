<html>
	<head>

		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<?php include "header.php" ?>
	</head>
		<title>Add new Faculty</title>
	<body style="background-color:#24a1b7;">
			<h1  class="h1"><u>ADMINISTRATIVE FORM</u></h1><br>
	 <div class="jumbotron">				
			<h2 class="display-4">Enter the new faculty details</h2>
			<hr class="my-4">
			<div class="lead">
			<form action="savefaculty.php" method="post">
			Name of the new faculty: <input type="text" name="faculty_name"/><br><br>		
			Phone_number: <input type="number" name="faculty_number"/><br><br>
			Email id: <input type="text" name="email"/><br><br>
			<input  class="btn btn-primary btn-lg" type="submit"/>
			<input  class="btn btn-primary btn-lg" type="reset"/>
			</form>	
			</div>
	</div>	
	</body>
</html>
