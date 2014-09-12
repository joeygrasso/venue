<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_PSOT['message'];
	$phone = $_POST['phone'];

	// Email Address For Submissions to be sent to:
	$to = "email_for_submissions";

	$subject = "Venu Form Submission From: $name";
	$body = "From: $name \n\n Phone: $phone \n\n Email: $email \n\n Message: $message";
	$headers = "From: $email";
    $sent = mail($to, $subject, $body, $headers);

    if($sent){
    	echo "<script language=javascript>window.location = 'http://www.venue.joeygrasso.com';</script>";
	}

?>
