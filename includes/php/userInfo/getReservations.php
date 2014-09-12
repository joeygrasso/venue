<?php

	$conn = mysql_connect('localhost', 'databaseUser', 'dbPassword');
    mysql_select_db('databaseName', $conn);

    $username = mysql_real_escape_string($username);
    $query = "SELECT R_ID, START_DATE, END_DATE, VENUE, User, Venue.V_ID, Venue.V_NAME FROM Reservation, Venue WHERE Reservation.User ='".$_SESSION['sess_user_id']."' AND Reservation.VENUE = Venue.V_ID ";
    //$query = "SELECT * FROM Reservation WHERE User='".$_SESSION['sess_user_id']."'";

    $result = mysql_query($query);

    // Prints Initial Reservation Table on home.php
    if(mysql_num_rows($result) == 0){
  	 echo "No Reservations!";
    } else {
      echo "
        <tr>
              <th>Reservation ID</th>
              <th>Venue</th>
              <th>Start Date</th>
              <th>End Date</th>
            </tr>
      ";

    	while($data = mysql_fetch_array($result)){
			  echo "

    			<tr>
    				<td>".$data['R_ID']."</td>
    				<td>".$data['V_NAME']."</td>
    				<td>".$data['START_DATE']."</td>
    				<td>".$data['END_DATE']."</td>
    			</tr>
    		";
    		} // End while
      } // End if/else
?>
