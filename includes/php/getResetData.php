<?php
	$u = "databaseUser";
	$p = "password";

	// Connect to Database
	$con = mysql_connect("localhost", $u, $p);
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	// Select The DB
	$db = mysql_select_db("database",$con)
	or die("Could not select database");


	// If username is set do everything otherwise poop on 'em
	if(isset($_POST['username'])){
		// SELECT * FROM the DB: jg7548, Table: Customers
		$username = $_POST["username"];
		$sql = 'SELECT USERNAME, SQ1, SQ2, SQ3, SQ4, SQ5, SA1, SA2, SA3, SA4, SA5 FROM Customers WHERE USERNAME="'.$username.'"';
		$result = mysql_query($sql);

		// Fill CustomerData Array With Information From Customer Table
		$CustomerData = array();

		// Populate Array With Query Result
		while($row = mysql_fetch_array($result)){
			$CustomerData[] = $row;
		}

		// If Result is Empty username does not exist. Else Randomly Give 2 Security Questions
		if (empty($CustomerData)){
			echo json_encode("dne"); // Return dne (Does Not Exist)
		} else {
			echo json_encode($CustomerData);
		} // End if/else

		// For Debugging echo "Successfully Queried: ".$sql."<br /><br />";
	} // End is set if
?>
