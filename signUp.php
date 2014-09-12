	<?php include_once('site_header.php'); ?>


    <!-- ========== Begin Site Content ========== -->
	
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="padding-top:75px; padding-left: 15px;">
					<h1>How's this look?</h1>
					<p>How's this look?</p>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<form role="form"  id ="theform"  method="post" action="./includes/php/verify.php">
									<div class="form-group">
										<label for="username">User Name</label>
										<input type="username" class="form-control" id="username" name="username" placeholder="User Name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
									</div>
								  <div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}$" title="Must contain one Uppercase letter and 1 digit"/>
								  </div>
								  <div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required pattern="^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$"/>
								  </div>
								  <div class="form-group">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="address">Address</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Address" required pattern="[a-zA-Z0-9 ]+" title="Must only contain digits and letters with spaces as needed"/>
								  </div>
								  <div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="City" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="state">State</label>
									<select class="form-control" name="state" required title="Please select a state from the list"/>
										<option value="">  </option>
										<option value="AL">AL</option>
										<option value="AK">AK</option>
										<option value="AZ">AZ</option>
										<option value="AR">AR</option>
										<option value="CA">CA</option>
										<option value="CO">CO</option>
										<option value="CT">CT</option>
										<option value="DE">DE</option>
										<option value="FL">FL</option>
										<option value="GA">GA</option>
										<option value="HI">HI</option>
										<option value="ID">ID</option>
										<option value="IL">IL</option>
										<option value="IN">IN</option>
										<option value="IA">IA</option>
										<option value="KS">KS</option>
										<option value="KY">KY</option>
										<option value="LA">LA</option>
										<option value="ME">ME</option>
										<option value="MD">MD</option>
										<option value="MA">MA</option>
										<option value="MI">MI</option>
										<option value="MN">MN</option>
										<option value="MS">MS</option>
										<option value="MO">MO</option>
										<option value="MT">MT</option>
										<option value="NE">NE</option>
										<option value="NV">NV</option>
										<option value="NH">NH</option>
										<option value="NJ">NJ</option>
										<option value="NM">NM</option>
										<option value="NY">NY</option>
										<option value="NC">NC</option>
										<option value="ND">ND</option>
										<option value="OH">OH</option>
										<option value="OK">OK</option>
										<option value="OR">OR</option>
										<option value="PA">PA</option>
										<option value="RI">RI</option>
										<option value="SC">SC</option>
										<option value="SD">SD</option>
										<option value="TN">TN</option>
										<option value="TX">TX</option>
										<option value="UT">UT</option>
										<option value="VT">VT</option>
										<option value="VA">VA</option>
										<option value="WA">WA</option>
										<option value="WV">WV</option>
										<option value="WI">WI</option>
										<option value="WY">WY</option>
									</select>
								  </div>
								  <div class="form-group">
									<label for="zip">Zip Code</label>
									<input type="zip" class="form-control" id="zip" name="zip" placeholder="Zip Code" required pattern="[0-9]{1,5}" title="Must follow 00000 pattern"/>
								  </div>
								  <div class="form-group">
									<label for="phone1">Phone Number</label>
									<input type="text" class="form-control" id="phone1" name="phone1" placeholder="Phone Number" required pattern="[0-9]{1,10}" title="Must follow 0000000000 pattern"/>
								  </div>
								  <div class="form-group">
									<label for="phone2">Alternate Phone Number</label>
									<input type="text" class="form-control" id="phone2" name="phone2" placeholder="Alternate Phone Number" pattern="[0-9]{1,10}" title="Must follow 0000000000 pattern"/>
								  </div>
								  <div class="form-group">
									<label for="sq1">What is your mother's maiden name?</label>
									<input type="text" class="form-control" id="sq1" name="sq1" placeholder="Mother's maiden name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="sq2">Who was best friend in high school?</label>
									<input type="text" class="form-control" id="sq2" name="sq2" placeholder="Best Friend's Name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="sq3">What was your first pet's name?</label>
									<input type="text" class="form-control" id="sq3" name="sq3" placeholder="First Pet's Name" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="sq4">What city was your high school located in?</label>
									<input type="text" class="form-control" id="sq4" name="sq4" placeholder="High School City" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">
									<label for="sq5">What city is your hometown?</label>
									<input type="text" class="form-control" id="sq5" name="sq5" placeholder="Hometown" required pattern="^[a-zA-Z]*$" title="Must only contain letters"/>
								  </div>
								  <div class="form-group">

								  </div>
								  <button type="submit" class="btn btn-default">Submit</button>
								</form>
							</div> <!-- End .col-md-6-->
							<div class="col-md-6"></div> <!-- End .col-md-6-->
						</div> <!-- End Row -->
					</div> <!-- End Container -->
				</div> <!-- End span8 -->
			</div> <!-- End Row -->
		</div> 
	<!-- ========== End Site Content ========== -->
	  <?php include_once('site_footer.php'); ?>