<?php
	// Takes variables and updates for account management.

	$u = "databaseUserName";
	$p = "password";

	// User Input From register.php
	$user = $_POST['id'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$venue = $_POST['venue'];

	// Connect to Database
	$con = mysql_connect("localhost", $u, $p);
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	// Select The DB
	$db = mysql_select_db("database",$con)
	or die("Could not select database");

	$sql = "INSERT INTO Reservation (START_DATE, END_DATE, Venue, User) VALUES ('$startdate', '$enddate', '$venue', '$user');";
	$retval = mysql_query( $sql, $con );
	if(! $retval ){
		die('Could not update data: ' . mysql_error());
	}

	mysql_close($con);

	header('Location: ../../home.php');

?>
