<?php
	// Get message details and email.
	$reservationID = $_POST['ddlReservations'];
	$guests = $_POST['guestsEmail'];
	$message = $_POST['message'];

	function getReservationInfo($reservationID){
		// Connect to the database
		$u = "databaseUserName";
		$p = "password";

		// Connect to Database
		$con = mysql_connect("localhost", $u, $p);
		if (!$con){
			die('Could not connect: ' . mysql_error());
		}
		// Select The DB
		$db = mysql_select_db("database",$con)
		or die("Could not select database");

		// SELECT USERNAME && PASSWORD FROM the DB: jg7548, Table: Customers
		$sql = 'SELECT * FROM Reservation WHERE R_ID="'.$reservationID.'"';
		$result = mysql_query($sql);

		// Fill CustomerData Array With Information From Customer Table
		$ReservationData = array();

		// Populate Array With Query Result
		while($row = mysql_fetch_array($result)){
			$ReservationData = array(
				$row['START_DATE'],
				$row['END_DATE']
				);
		}

		return $ReservationData;
	} // End getReservationInfo

	$data = getReservationInfo($reservationID);

	// From Email
	$fEmail = "do_not_reply@venu.com";

	// Email Address For Submissions to be sent to:
	$to = $guests;

	$subject = "You have been invited!";
	$body = "You have been invited to attend an event from $data[0] to $data[1] \n\n\n Message: $message";
	$headers = "From: $fEmail";
	$sent = mail($to, $subject, $body, $headers);

	if($sent){
    	echo "<script language=javascript>window.location = 'http://www.venue.joeygrasso.com/home.php';</script>";
	}

?>
