<?php

  $date = date("Y-m-d");

$conn = mysql_connect('localhost', 'databaseUser', 'dbPassword');
	mysql_select_db('databaseName', $conn);

  $username = mysql_real_escape_string($username);
  $query = "SELECT * FROM Reservation WHERE User='".$_SESSION['sess_user_id']."' AND START_DATE > '".$date."'";

  $result = mysql_query($query);

  // Creates the reservation DDL for the invitations
  if(mysql_num_rows($result) == 0){
    echo '<p class="lead">You must have at least 1 reservation to cancel one.</p>';
  } else {
      echo '
        <p>To cancel a reservation please select the reservation ID from the dropdown list.</p>
        <form class="form-horizontal" role="form" method="post" action="./includes/php/dropReservation.php">
        <div class="form-group">
          <label for="ddlReservations" class="col-sm-4 control-label">Reservation ID:</label>
          <div class="col-sm-6">
          <select name="ddlReservations" id="ddlReservations" class="form-control">
            <option></option>
        ';
             while($data = mysql_fetch_array($result)){
                echo "<option value=\"".$data['R_ID']."\">".$data['R_ID']." | ".$data['START_DATE']." | ".$data['END_DATE']."</option>";
              }
      echo '
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-6">
            <button type="submit" class="btn btn-default">Cancel Reservation</button>
          </div>
        </div>
      </form>
      ';
  }

?>
