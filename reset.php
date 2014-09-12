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
                  <form action="./includes/php/getResetData.php" method="post" class="resetForm" id="resetForm">
                    <div class="form-group">
                      <label for="username">User Name:</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" length="50">
                    </div>
                    <div id="questions"></div>
                    <button type="submit" class="btn btn-default" id="submit">Submit</button>
                  </form>

                <div id="questions"></div>
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
	<script src="./includes/js/bootstrap.js"></script>
	<script src="./includes/js/jquery1.11.js"></script>
	</body>

  <!-- JavaScript & AJAX Stuff -->
   <script>
    $('#submit').on('click', function(e){
      $.ajax({
        type: "POST",
        url: "./includes/php/getResetData.php",
        data: { 'username': $('#username').val()},
        async: false,
        contentType: 'application/x-www-form-urlencoded; charset=utf-8',
        dataType: "json",
        success: function(response){
          if(response == "dne"){
            $('#error').replaceWith('<p style="font-size: 1.1em; color:red;">The user name you entered does not exist.</p>');
          } else {
            // Generate 2 Random Numbers
            var r1 = Math.floor((Math.random()*5)); // Random number between 1 and 5 to select 1 of the 5 security questions
            var r2 = Math.floor((Math.random()*5)); // Random number between 1 and 5 to select 1 of the 5 security questions
            console.log(r1 + ", " + r2);

            // Randomly Select 2 of the 5 Security Questions From JSON Encoded Data
            var questions = new Array();
            var z = 0; // To get rid of the 1 offset of the for loop
            for (var i = 1; i <= 5; i++){
              questions[z] = response[0][i];
              z++;
            } // End for loop to get questions

            var answers = new Array();
            z = 0; // To get rid of the 1 offset of the for loop
            for (var i = 6; i <= 10; i++){
                answers[z] = response[0][i];
                z++;
            } // End for loop to get answers

            $('#resetForm').replaceWith('<form action="./includes/php/resetAnswers.php" method="post" class="resetForm" id="resetForm"><div class="form-group"><label for="username">User Name:</label><input type="text" class="form-control" id="username" name="username" value="'+ response[0][0] + '" length="50" readonly></div><div class="form-group"><label for="a1">'+ questions[r1] +'</label> <input type="text" class="form-control" id="a1" name="a1" placeholder="Enter Answer" length="50"></div><div class="form-group"><label for="a2">'+ questions[r2] +'</label><input type="text" class="form-control" id="a2" name="a2" placeholder="Enter Answer" length="50"></div><input type="hidden" name="q1" value="'+ questions[r1] +'"><input type="hidden" name="q2" value="'+ questions[r2] +'"><button type="submit" class="btn btn-default" id="submit">Submit</button></form>');

          } // End if/else username exists
        } // End Success Function

      }); // End AJAX

      //If Both Are Correct Bring to Password Reset Page That Writes To Database
      // Else Alert With Errors & Reload The Page

      function checkAnswers(ans1, ans2){
        if ($('#a1').val() == ans1 && $('#a2').val() == ans2){
          // Password Change Prompt
        } else{
          alert("1 or more of the answers you provided were incorrect. If issues persist contact technical support.");
          window.location = "http://www.joeygrasso.com/site";
        } // End if/else
      } // End checkAnswers() Functions

      console.log("For Debugging Delete Me When I'm Not Needed.");
      return false;
    });
   </script>
</html>
