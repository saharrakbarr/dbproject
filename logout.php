
<?php
	include_once("login.php");
	session_start();
	session_destroy();
	mysqli_query($mysqli, "UPDATE user_13117 SET active = '0' WHERE username = '$username'");
	
    header('Location: login.php');
?>