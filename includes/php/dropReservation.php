<?php
	// This deletes a reservation from the table

	// Get the form submission
	$reservationID = $_POST['ddlReservations'];

	$con=mysqli_connect("localhost","databaseUserName","password","databaseName");

	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_query($con,"DELETE FROM Reservation WHERE R_ID='$reservationID'");

	mysqli_close($con);

	header('Location: ../../home.php');
?>
