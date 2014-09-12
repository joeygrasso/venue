<!DOCTYPE html>
<html>
	<head>
		<title>Venu | Event Venue Reservation System</title>
		<!-- Bootstrap core CSS -->
   		<link href="./includes/css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom styles for this template -->
    	<link href="./includes/css/style.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
	<body>

	<!-- Header Above Navigation Start -->
    <header>
      <div class="container header-logo">
        <div class="header-logo">
          <img src="./images/logo.png" alt="Venu Logo" class="img-responsive" />
        </div>
      </div>
    </header>
    <!-- Header Above Navigation End -->

    <!-- Navigation Start -->
    <div class="navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Venues<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html#plantation">Plantation</a></li>
                <li><a href="index.html#beach">Beach</a></li>
                <li><a href="index.html#downtown">Downtown</a></li>
              </ul>
            </li>
            <li class="active"><a href="register.php">Register</a></li>
            <li><a href="signIn.php">Sign In</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="form" method="post" action="./login.php">
            <div class="form-group">
              <input type="text" placeholder="User Name" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- Navigation End -->
	<div class="content">
      <div class="container mainContainer">
          <div class="row">
            <div class="col-md-9">
              <h1>Register for Venue</h1>
            </div>
            <div class="col-md-3">
              <h1 align="center">Contact Us</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9" style="border-right: 1px solid; border-color: #443266;">
                <p> All fields are required to be able to register.</p>
                <form role="form"  id ="theform"  method="post" action="./includes/php/userAdd.php">
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
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required pattern="^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$" title="Must enter valid email address"/>
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
									<select class="form-control" name="state" required title="Please select a state from the list" pattern="^(AL|AK|AZ|AR|CA|CO|CT|DE|FL|GA|HI|ID|IL|IN|IA|KS|KY|LA|ME|MH|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|MP|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VT|VA|WA|WV|WI|WY)$"/>
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
									<input type="text" class="form-control" id="phone2" name="phone2" placeholder="Alternate Phone Number" required pattern="[0-9]{1,10}" title="Must follow 0000000000 pattern"/>
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
                <button type="submit" class="btn btn-default">Register</button>
              </form>
            </div>
            
            <div class="col-md-3">
              <p class="lead" align="right"><span class="glyphicon glyphicon-phone-alt"></span> 855-888-Venu<br /><span align="right">8368</span></p>
              <form method="post" action="contact.php">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="(###)-###-####">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Message:</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>

      </div><!-- /.container -->
    </div>

    <footer>
      <div class="container footer">
        <p>&copy; Venu | Venue Reservation System</p>
        <div class="row">
        	<div class="col-md-4">Joey Grasso</div>
        	<div class="col-md-4">Megan Smith</div>
        	<div class="col-md-4">Erika Moore</div>
      </div>
    </footer>
  </div>
	<!-- JavaScript Stuff -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="./includes/js/bootstrap.js"></script>
	<script src="./includes/js/jquery1.11.js"></script>
	</body>
</html>

