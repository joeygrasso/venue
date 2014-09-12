<?php
	session_start();
	
	session_destroy();

	// Go to login page
	header('Location: loggingout.php');

?>
