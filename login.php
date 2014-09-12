<?php
	ob_start();
    session_start();

	$username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysql_connect('localhost', 'databaseName', 'database_password');
    mysql_select_db('joeygras_venue', $conn);

    $username = mysql_real_escape_string($username);
    $query = 'SELECT U_ID, USERNAME, PASSWORD FROM Customers WHERE USERNAME="'.$username.'"';

    $result = mysql_query($query);

    // User not found. So, redirect to login_form
    if(mysql_num_rows($result) == 0){
    	header('Location: signIn.php');
    }

    $userData = mysql_fetch_array($result, MYSQL_ASSOC);

    // Incorrect password. So, redirect to login.html
    if($password != $userData['PASSWORD']) {
    header('Location: signIn.php');
    } else {
    	// Redirect to home page after successful login.
    	session_regenerate_id();
    	$_SESSION['sess_user_id'] = $userData['U_ID'];
    	$_SESSION['sess_username'] = $userData['USERNAME'];
    	session_write_close();
    	header('Location: home.php');
    }

?>
