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
            <li class="active"><a href="signIn.php">Sign In</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- Navigation End -->
	<div class="content">
      <div class="container mainContainer">
          <div class="row">
            <div class="col-md-9">
              <h1>Please Sign In</h1>
            </div>
            <div class="col-md-3">
              <h1 align="center">Contact Us</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <p>Please enter your username and password to log in to your account. Did you <a href="reset.php">forget</a> your username/password?</p>
              <div class="row">
                <div class="col-md-4">
                  <div id="error" style="color:red"><?php echo $error_message;?></div>
                  <form action="./login.php" method="post" class="signInForm" id="signInForm">
                    <div class="form-group">
                      <label for="username">User Name:</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="User Name" length="50">
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" length="50">
                    </div>
                    <div id="questions"></div>
                    <button type="submit" class="btn btn-default" id="submit">Sign In</button>
                  </form>
                  <div><a href="reset.php">Reset Password</a></div>
                </div>
              </div>
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
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
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
