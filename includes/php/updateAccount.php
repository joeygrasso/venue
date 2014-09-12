<?php
	// Takes variables and updates for account management.

	$u = "databaseUserName";
	$p = "password";

	// User Input From register.php
	$id = $_POST['id'];
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
	$db = mysql_select_db("database",$con)
	or die("Could not select database");

	$sql = "UPDATE Customers SET PASSWORD='$password', EMAIL_ADDRESS='$email', FIRST_NAME='$fname', LAST_NAME='$lname', ADDRESS='$address', CITY='$city', STATE='$state', ZIP='$zip', PHONE='$phone1', ALT_PHONE='$phone2', SA1='$sq1', SA2='$sq2', SA3='$sq3', SA4='$sq4', SA5='$sq5' WHERE U_ID='$id';";
	$retval = mysql_query( $sql, $con );
	if(! $retval ){
		die('Could not update data: ' . mysql_error());
	}

	mysql_close($con);

	header('Location: ../../account.php');

?>
