<?php

$conn = mysql_connect('localhost', 'databaseUser', 'dbPassword');
	mysql_select_db('databaseName', $conn);

  $username = mysql_real_escape_string($username);
  $query = "SELECT * FROM Customers WHERE U_ID='".$_SESSION['sess_user_id']."'";

  $result = mysql_query($query);

  // Prints Initial Reservation Table on home.php
 while($data = mysql_fetch_array($result)){
   echo '
      <input type="hidden" name="id" value="'.$data['U_ID'].'" />
			<div class="form-group">
        <label for="password">Password</label>
        <input type="password"  minlength = "8" class="form-control" id="password" name="password" value="'.$data['PASSWORD'].'"/>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="'.$data['EMAIL_ADDRESS'].'"/>
      </div>
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" value="'.$data['FIRST_NAME'].'"/>
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" value="'.$data['LAST_NAME'].'"/>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="'.$data['ADDRESS'].'"/>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" value="'.$data['CITY'].'"/>
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name="state" value="'.$data['STATE'].'"/>
      </div>
      <div class="form-group">
      <label for="zip">Zip Code</label>
      <input type="text" class="form-control" id="zip" name="zip" value="'.$data['ZIP'].'"/>
      </div>
      <div class="form-group">
      <label for="phone1">Phone Number</label>
      <input type="text" class="form-control" id="phone1" name="phone1" value="'.$data['PHONE'].'"/>
      </div>
      <div class="form-group">
      <label for="phone2">Alternate Phone Number</label>
      <input type="text" class="form-control" id="phone2" name="phone2"value="'.$data['ALT_PHONE'].'"/>
      </div>
      <div class="form-group">
      <label for="sq1">What is your mother\'s maiden name?</label>
      <input type="text" class="form-control" id="sq1" name="sq1" value="'.$data['SA1'].'"/>
      </div>
      <div class="form-group">
      <label for="sq2">Who was best friend in high school?</label>
      <input type="text" class="form-control" id="sq2" name="sq2" value="'.$data['SA2'].'"/>
      </div>
      <div class="form-group">
      <label for="sq3">What was your first pet\'s name?</label>
      <input type="text" class="form-control" id="sq3" name="sq3" value="'.$data['SA3'].'"/>
      </div>
      <div class="form-group">
      <label for="sq4">What city was your high school located in?</label>
      <input type="text" class="form-control" id="sq4" name="sq4" value="'.$data['SA4'].'"/>
      </div>
      <div class="form-group">
      <label for="sq5">What city is your hometown?</label>
      <input type="text" class="form-control" id="sq5" name="sq5" value="'.$data['SA5'].'"/>
      </div>
		';
	} // End while
?>
