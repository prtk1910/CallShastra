<?php
	session_start();
	$conn = new mysqli("localhost",'root','','callreview');
	$user_check = $_SESSION['login_user'];
	$sql="select * from admin where username='$user_check'";

	$result = $conn ->query($sql);
	$row = $result ->fetch_assoc();
	$login_session =$row['username'];
	if(!isset($login_session))
	{
		$conn->close();
		session_destroy();
		header('Location:/Codeshastra-frontend/gentella/gentelella-master/production/login.php'); // Redirecting To Home Page
	}
?>