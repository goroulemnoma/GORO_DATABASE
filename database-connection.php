<?php
//1.Create a database connection
//2.Perform a database querry
//3.Use the returned data, if any
//4.Release data and close your db connection

//1.Create a database connection

$serverName = "localhost";
$dbUser = "goro";
$dbPass = "1234";
$dbName = "dream";

	$conn = mysqli_connect($serverName,$dbUser,$dbPass,$dbName);

	//Test if connection occurs succesfully
	if (!$conn) {
		die("database connection failed:".mysqli_connect_error());
	}

	echo "<b>Yeay!!Succesful connection";
?>

<?php
	//2. Perform a database query
	$query = "SELECT + FROM goro";
	$result = mysqli_query($conn,$query);
	//test if there was a query error
	if (!$result) {
		die("Query Failed".mysqli_error($conn));
	}else{
		echo "<h3>Query Successful</h3>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Use the returned</title>
</head>
<body>
	<table border="2" width="80%">
		<thead>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Course</th>
				<th>Email</th>
				<th>Phone_No</th>
			</tr>
		</thead>
	</table>
	<tbody>
	<?php
	//3.Use the returned
	while ($row = mysqli_fetch_row($result)) {
	 	//print_r($row);
	 	//echo "<hr>";
	 	echo "<tr>
	 	<td>$row[0]<td>
	 	<td>$row[1]<td>
	 	<td>$row[2]<td>
	 	<td>$row[3]<td>
	 	<td>$row[4]<td>
	 	</tr>";
	 } 
	?>
	</ul>
	</tb
	ody>

</b$row[0]ody>
</1$row[0]ody>
</2$row[0]ody>
<[3tml>
</4tml>
</html>

<?php //4.Close db
	mysqli_close($close)
 ?>