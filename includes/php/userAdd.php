<?php
	$u = "databaseUsername";
	$p = "password";

	// User Input From register.php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$state = $_POST['state'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$sq1 = $_POST['sq1'];
	$sq2 = $_POST['sq2'];
	$sq3 = $_POST['sq3'];
	$sq4 = $_POST['sq4'];
	$sq5 = $_POST['sq5'];

	// Connect to Database
	$con = mysql_connect("localhost", $u, $p);
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	// Select The DB
	$db = mysql_select_db("databaseName",$con)
	or die("Could not select databaseName");

	$sql = "INSERT INTO Customers (USERNAME, PASSWORD, EMAIL_ADDRESS, FIRST_NAME, LAST_NAME, ADDRESS, CITY, STATE, ZIP, PHONE, ALT_PHONE, SQ1, SQ2, SQ3, SQ4, SQ5, SA1, SA2, SA3, SA4, SA5) VALUES ('$username', '$password', '$email', '$fname', '$lname', '$address', '$city', '$state', '$zip', '$phone1', '$phone2', 'What is your mothers maiden name?', 'Who was best friend in high school?', 'What was your first pets name?', 'What city was your high school located in?', 'What city is your hometown?', '$sq1', '$sq2', '$sq3', '$sq4', '$sq5');";
	$retval = mysql_query( $sql, $con );
	if(! $retval ){
		die('Could not update data: ' . mysql_error());
	}

	mysql_close($con);

	header('Location: ../../success.php');

  ?>
