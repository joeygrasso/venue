	<?php include_once('site_header.php'); ?>
	<script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'blackglass'
		};
	</script>

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
										<input type="username" class="form-control" id="username" name="username" placeholder="User Name" required
											data-validation-uppercase-regex="([^a-z]*[A-Z]*)*"
											data-validation-uppercase-message="Must contain uppercase letter"
											data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
											data-validation-containsnumber-message="Needs at least one number" />
									</div>
								  <div class="form-group">
									<label for="password">Password</label>
									<input type="password"  minlength = "8" class="form-control" id="password" name="password" placeholder="Password" required
											data-validation-uppercase-regex="([^a-z]*[A-Z]*)*"
											data-validation-uppercase-message="Must contain uppercase letter"
											data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
											data-validation-containsnumber-message="Needs at least one number"/>
								  </div>
								  <div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
								  </div>
								  <div class="form-group">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required/>
								  </div>
								  <div class="form-group">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required/>
								  </div>
								  <div class="form-group">
									<label for="address">Address</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Address" required/>
								  </div>
								  <div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="City" required/>
								  </div>
								  <div class="form-group">
									<label for="state">State</label>
									<select class="form-control" name="state" required/>
										<option value="other" label="Other / Not Listed">Other / Not Listed</option>
										<option value="Alabama" label="Alabama">Alabama</option>
										<option value="Alaska" label="Alaska">Alaska</option>
										<option value="Alberta" label="Alberta">Alberta</option>
										<option value="Arizona" label="Arizona">Arizona</option>
										<option value="Arkansas" label="Arkansas">Arkansas</option>
										<option value="California" label="California">California</option>
										<option value="Colorado" label="Colorado">Colorado</option>
										<option value="Connecticut" label="Connecticut">Connecticut</option>
										<option value="Delaware" label="Delaware">Delaware</option>
										<option value="District of Columbia" label="District of Columbia">District of Columbia</option>
										<option value="Florida" label="Florida">Florida</option>
										<option value="Georgia" label="Georgia" selected="selected">Georgia</option>
										<option value="Hawaii" label="Hawaii">Hawaii</option>
										<option value="Idaho" label="Idaho">Idaho</option>
										<option value="Illinois" label="Illinois">Illinois</option>
										<option value="Indiana" label="Indiana">Indiana</option>
										<option value="Iowa" label="Iowa">Iowa</option>
										<option value="Kansas" label="Kansas">Kansas</option>
										<option value="Kentucky" label="Kentucky">Kentucky</option>
										<option value="Louisiana" label="Louisiana">Louisiana</option>
										<option value="Maine" label="Maine">Maine</option>
										<option value="Maryland" label="Maryland">Maryland</option>
										<option value="Massachusetts" label="Massachusetts">Massachusetts</option>
										<option value="Michigan" label="Michigan">Michigan</option>
										<option value="Minnesota" label="Minnesota">Minnesota</option>
										<option value="Mississippi" label="Mississippi">Mississippi</option>
										<option value="Missouri" label="Missouri">Missouri</option>
										<option value="Montana" label="Montana">Montana</option>
										<option value="Nebraska" label="Nebraska">Nebraska</option>
										<option value="Nevada" label="Nevada">Nevada</option>
										<option value="New Brunswick" label="New Brunswick">New Brunswick</option>
										<option value="New Hampshire" label="New Hampshire">New Hampshire</option>
										<option value="New Jersey" label="New Jersey">New Jersey</option>
										<option value="New Mexico" label="New Mexico">New Mexico</option>
										<option value="New York" label="New York">New York</option>
										<option value="North Carolina" label="North Carolina">North Carolina</option>
										<option value="North Dakota" label="North Dakota">North Dakota</option>
										<option value="Ohio" label="Ohio">Ohio</option>
										<option value="Oklahoma" label="Oklahoma">Oklahoma</option>
										<option value="Ontario" label="Ontario">Ontario</option>
										<option value="Oregon" label="Oregon">Oregon</option>
										<option value="Pennsylvania" label="Pennsylvania">Pennsylvania</option>
										<option value="Quebec" label="Quebec">Quebec</option>
										<option value="Rhode Island" label="Rhode Island">Rhode Island</option>
										<option value="South Carolina" label="South Carolina">South Carolina</option>
										<option value="South Dakota" label="South Dakota">South Dakota</option>
										<option value="Tennessee" label="Tennessee">Tennessee</option>
										<option value="Texas" label="Texas">Texas</option>
										<option value="Utah" label="Utah">Utah</option>
										<option value="Vermont" label="Vermont">Vermont</option>
										<option value="Virginia" label="Virginia">Virginia</option>
										<option value="Washington" label="Washington">Washington</option>
										<option value="West Virginia" label="West Virginia">West Virginia</option>
										<option value="Wisconsin" label="Wisconsin">Wisconsin</option>
										<option value="Wyoming" label="Wyoming">Wyoming</option>
									</select>
								  </div>
								  <div class="form-group">
									<label for="zip">Zip Code</label>
									<input type="zip" class="form-control" id="zip" name="zip" placeholder="Zip Code" required/>
								  </div>
								  <div class="form-group">
									<label for="phone1">Phone Number</label>
									<input type="text" class="form-control" id="phone1" name="phone1" placeholder="Phone Number" minlength= "10" maxlength="10" required/>
								  </div>
								  <div class="form-group">
									<label for="phone2">Alternate Phone Number</label>
									<input type="text" class="form-control" id="phone2" name="phone2" placeholder="Alternate Phone Number" minlength="10" maxlength= "10" required/>
								  </div>
								  <div class="form-group">
									<label for="sq1">What is your mother's maiden name?</label>
									<input type="text" class="form-control" id="sq1" name="sq1" placeholder="Mother's maiden name" required/>
								  </div>
								  <div class="form-group">
									<label for="sq2">Who was best friend in high school?</label>
									<input type="text" class="form-control" id="sq2" name="sq2" placeholder="Best Friend's Name" required/>
								  </div>
								  <div class="form-group">
									<label for="sq3">What was your first pet's name?</label>
									<input type="text" class="form-control" id="sq3" name="sq3" placeholder="First Pet's Name" required/>
								  </div>
								  <div class="form-group">
									<label for="sq4">What city was your high school located in?</label>
									<input type="text" class="form-control" id="sq4" name="sq4" placeholder="High School City" required/>
								  </div>
								  <div class="form-group">
									<label for="sq5">What city is your hometown?</label>
									<input type="text" class="form-control" id="sq5" name="sq5" placeholder="Hometown" required/>
								  </div>
								  <div class="form-group">
								  <?php
									require_once('./includes/php/recaptchalib.php');
									$publickey = "publicCaptchaKey"; // you got this from the signup page
									echo recaptcha_get_html($publickey);
								  ?>
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
