<?php

	$conn = mysql_connect('localhost', 'database', 'password');
  mysql_select_db('database', $conn);

  $username = mysql_real_escape_string($username);
  $query = "SELECT EMAIL_ADDRESS, FIRST_NAME, LAST_NAME FROM Customers WHERE U_ID='".$_SESSION['sess_user_id']."'";

  $result = mysql_query($query);

  // Prints Initial Reservation Table on home.php
 while($data = mysql_fetch_array($result)){
   echo '
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="'.$data['EMAIL_ADDRESS'].'" readonly="true"/>
      </div>
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" value="'.$data['FIRST_NAME'].'" readonly="true"/>
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" value="'.$data['LAST_NAME'].'" readonly="true"/>
		</div>
	  <div class="form-group">
		<label for="venue">Venue:</label><br>
		<select name="venue" class="form-control" required title="Please select a state from the list" pattern="^(Beach|Downtown|Plantation)$">
			<option></option>
			<option value="1">Beach</option>
			<option value="2">Downtown</option>
			<option value="3">Plantation</option>
		</select>
	  </div>
	  <div class="form-group">
			<label for="startdate">Start Date:</label>
			<input type="text" class="form-control" id="startdate" name="startdate" placeholder="Start Date" required pattern="^[0-3]?[0-9]/[0-3]?[0-9]/(?:[0-9]{2})?[0-9]{2}$" title="Must be in DD/MM/YYYY format"/>
			$('#datepicker').datepicker()
	  </div>
	  <div class="form-group">
			<label for="enddate">End Date:</label>
			<input type="text" class="form-control" id="enddate" name="enddate" placeholder="End Date" required pattern="^[0-3]?[0-9]/[0-3]?[0-9]/(?:[0-9]{2})?[0-9]{2}$" title="Must be in DD/MM/YYYY format"/>
	  </div>
	  ';
	} // End while
?>
