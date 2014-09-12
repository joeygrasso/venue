<?php
	// Variables For The Form:
	$username = $_POST['username'];
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$ans1 = $_POST['a1'];
	$ans2 = $_POST['a2'];

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

	// SELECT * FROM the DB: jg7548, Table: Customers
	$sql = 'SELECT USERNAME, SA1, SA2, SA3, SA4, SA5 FROM Customers WHERE USERNAME="'.$username.'"';
	$result = mysql_query($sql);

	// Fill CustomerData Array With Information From Customer Table
	$CustomerData = array();

	// Populate Array With Query Result
	while($row = mysql_fetch_array($result)){
		$CustomerData[] = $row[1];
		$CustomerData[] = $row[2];
		$CustomerData[] = $row[3];
		$CustomerData[] = $row[4];
		$CustomerData[] = $row[5];
	}

	$correct1 = false;
	$correct2 = false;

	for($i=0; $i <= 4; $i++){
		if($ans1 == $CustomerData[$i]){
			$correct1 = true;
		}
	}

	for($j=0; $j <= 4; $j++){
		if($ans2 == $CustomerData[$j]){
			$correct2 = true;
		}
	}

	// Both answers were correct and the user is allowed to continue to change their password. Else they are given error and a link to try again.
	if ($correct1 && $correct2){
		echo'
			<!DOCTYPE html>
<html>
	<head>
		<title>Venu | Event Venue Reservation System</title>
		<!-- Bootstrap core CSS -->
   		<link href="../css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom styles for this template -->
    	<link href="../css/style.css" rel="stylesheet">

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
          <img src="../../images/logo.png" alt="Venu Logo" class="img-responsive" />
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
                <li><a href="index.html#plantation">Downtown</a></li>
              </ul>
            </li>
            <li><a href="#about">Register</a></li>
            <li><a href="signIn.php">Sign In</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- Navigation End -->
	<div class="content">
      <div class="container mainContainer">
          <div class="row">
            <div class="col-md-9">
              <h1>Password Reset</h1>
            </div>
            <div class="col-md-3">
              <h1 align="center">Contact Us</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <p>Enter the user name of the account that you would like to reset the password.</p>
              <div class="row">
                <div class="col-md-5">
                  <div id="error" style="color:red"></div>
                  <form action="./resetPassword.php" method="post">
                    <input type="hidden" value="'.$username.'" name="username" />
                    <div class="form-group">
                      <label for="newPassword">Enter New Password:</label>
                      <input type="text" class="form-control" id="newPassword" name="newPassword" required />
                    </div>
                    <input type="submit" value="Submit" />
                  </form>
                </div> <!-- End span5 -->
                <div class="col-md-7">

                </div> <!-- End span7 -->
              </div> <!-- End Row -->
            </div>
          <div class="col-md-3" style="border-left: 1px solid; border-color: #443266;">
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
              <button id="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div><!-- /.container -->

    <footer>
      <div class="container footer">
        <p>&copy; Venu | Venue Reservation System</p>
      </div>
    </footer>

	<!-- JavaScript Stuff -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery1.11.js"></script>
	</body>
</html>

		';
	} else{
		echo "1 or more of the answers you provided was incorrect. <a href=\"http://www.venue.joeygrasso.com/reset.php\">Click Here to try again.</a>";
	}

?>
