<?php
    //Start session
    session_start();

    //Check whether the session variable SESS_MEMBER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || ($_SESSION['sess_user_id'] == '')) {
    header("location: signIn.php");
    exit();
    }
?>
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
                <li><a href="index.html#plantation">Downtown</a></li>
              </ul>
            </li>
            <li><a href="register.php">Register</a></li>
            <li><a href="signIn.php">Sign In</a></li>
          </ul>
          <div class="navbar-form navbar-right" role="form" method="post" action="./login.php">
          	<div class="btn-group">
              <a href="./includes/php/logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
			     </div>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- Navigation End -->
	<div class="content">
      <div class="container mainContainer">
        <div class="row">
          <div class="col-md-3">
            <h2></h1>
          </div>
          <div class="col-md-9">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
           	<ul class="dashboard-nav">
              <li><span class="glyphicon glyphicon-home"></span> <a href="home.php">Home</a></li>
              <li><span class="glyphicon glyphicon-calendar"></span> <a href="reservation.php">Make Reservation</a></li>
              <li><span class="glyphicon glyphicon-ban-circle"></span> <a href="cancelReservation.php">Cancel Reservation</a></li>
              <li><span class="glyphicon glyphicon-envelope"></span> <a href="inviteGuests.php">Invite Guests</a></li>
              <li><span class="glyphicon glyphicon-usd"></span> <a href="invoices.php">Invoices</a></li>
              <li><span class="glyphicon glyphicon-user"></span> <a href="account.php">Account</a></li>
            </ul>
          </div>
          <div class="col-md-9" style="border-left: 1px solid; border-color: #443266;">
           	<h2 id="dashboard-h2">Invite Guests</h2>
            <hr />
            <?php include './includes/php/userInfo/getReservationDDL.php'; ?>
          </div>
      </div><!-- /.container -->
    </div>

    <footer>
      <div class="container footer">
        <p>&copy; Venu | Venue Reservation System</p>
      </div>
    </footer>
    
	<!-- JavaScript Stuff -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="./includes/js/bootstrap.js"></script>
	<script src="./includes/js/jquery1.11.js"></script>
	</body>
</html>
