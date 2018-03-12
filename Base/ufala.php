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
	<title>REAL ESTATE </title>
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
		<a class="navbar-brand" href="#">HOME</a>
		</div>
		<div class="collapse navbar-collapse" id="hamburger">
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Login</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-phone">
				</span>View (Read)</span>
			</ul>
		</div>
	</div>
</nav>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<h2>ESTATE AGENCY LTD</h2>
			<p><span class="text-primary" >Create</span>|<span class="text-success" >Read</span>|<span class="text-warning" >Update</span>|<span class="text-danger">Delete</span></p>
		</div>
		<!--Push data to the db-->
		<form action="hospital.php" method="post">
			<div class="container-fluid"> 
			<div class="jumbotron" style="background-color: violet;>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>ID:
							<input type="number" name="number" class="form-control" required placeholder="ID no.">
						</label>
					</div>
					<div class="form-group">
						<label>USERNAME:
							<input type="text" name="name" class="form-control" required placeholder="Enter USERNAME">
						</label>
					</div>
					
				  </div>
				  <div class="col-md-5">
				  	<div class="form-group">
						<label>PASSWORD:
							<input type="pass" name="PASSWORD" class="form-control" placeholder="Enter password" required>
						</label>
					</div>
					<div class="form-group">
						<label>PHONE:
							<input type="number" name="phone" class="form-control" required placeholder="Age">
						</label>
					</div>
					<p><span class="glyphicon glyphicon-remove-circle">forgot password</span></p>
				</div>
			</div>
		</div>
				<div class="button" style="color: blue">
					<button>SUBMIT</button>
				</div>
		</form>
	</div>
	</div>
</body>
</html>