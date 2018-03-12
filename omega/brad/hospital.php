<?php 
	//db connection
	$server = "localhost";
	$dbUser = "goro";
	$dbPass = "1234";
	$dbName = "hosi";

	$conn = mysqli_connect($server, $dbUser, $dbPass, $dbName);

	if (!$conn) {
		die("Db connection failed:".mysqli_connect_error());
	}
	echo "<h1>SUCCESS</h1>";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHO CRUD SYSTEM</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<style>#cent{margin-top:70px; margin-right: 70px;}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse container gee">
		<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hamburger"> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">HOSI</a>
		</div>
		<div class="collapse navbar-collapse" id="hamburger">
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Register Patient(create)</a></li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-phone">
				</span>View patients record(Read)</span>
			</ul>
		</div>
	</div>
</nav>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<h2>mySQL brad operations</h2>
			<p><span class="text-primary" >Create</span>|<span class="text-success" >Read</span>|<span class="text-warning" >Update</span>|<span class="text-danger">Delete</span></p>
		</div>
		<!--Push data to the db-->
		<form action="hospital.php" method="post">
			<div class="container-fluid"> 
			<div class="jumbotron" style="background-color: violet;>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>Name:
							<input type="text" name="name" class="form-control" required placeholder="Input name">
						</label>
					</div>
					<div class="form-group">
						<label>Gender:
							<input type="text" name="gender" class="form-control" required placeholder="Male/Female/Other">
						</label>
					</div>
					<div class="form-group">
						<label>Date:
							<input type="date" name="date" class="form-control" required>
						</label>
					</div>
				  </div>
				  <div class="col-md-5">
					<div class="form-group">
						<label>Age:
							<input type="number" name="age" class="form-control" required placeholder="Age">
						</label>
					</div><div class="form-group">
						<label>Contact:
							<input type="number" name="contact" class="form-control" required placeholder="input contact">
						</label>
					</div><div class="form-group">
						<label>Allergy:
							<input type="text" name="allergy" class="form-control" required placeholder="Allergy">
						</label>
					</div>
				</div>
			</div>
		</div>		<div class="col-md-2">
					<input type="submit" name="submit" style="color: blue">
				</div>
		</form>
	</div>
	</div>
</body>
</html>