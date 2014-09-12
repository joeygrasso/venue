<?php

	$u = "databaseUserName";
	$p = "password";
	$newPassword = $_POST['newPassword'];
	$username = $_POST['username'];

	// Connect to Database
	$con = mysql_connect("localhost", $u, $p);
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	// Select The DB
	$db = mysql_select_db("database",$con)
	or die("Could not select database");

	$sql = "UPDATE Customers ".
       "SET PASSWORD = '$newPassword' ".
       "WHERE USERNAME = '$username'" ;

    $retval = mysql_query( $sql, $con );
	if(! $retval ){
		die('Could not update data: ' . mysql_error());
	}

    mysql_close($con);

    header("location: http://www.venue.joeygrasso.com/signIn.php");
?>
