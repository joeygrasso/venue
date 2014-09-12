<?php
	
	if (!isset($_SESSION['username'])){
		header("Location: ../../signIn.php");
	} else {
		echo "is Set";
	}

?>
