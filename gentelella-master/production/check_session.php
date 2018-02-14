<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
 if (isset($_POST["btn_login"]))
 {
	// Define $username and $password
	$username=$_POST['email'];
	$password=$_POST['password'];
	$conn = new mysqli("localhost",'root','','callreview');
	$username = stripslashes($username);
	$password = stripslashes($password);
	$sql="SELECT username,password from admin where username = '$username' and password = '$password'";
	$result = $conn ->query($sql);
	$rows=$result->num_rows;
	$row = $result->fetch_assoc();
	if ($result->num_rows== 1) 
	{
		$_SESSION['login_user']= $row["username"];// Initializing Session
		header('Location:/gentelella-master/production/index2.php'); // Redirecting To Other Page
	} 
	else
	{
		$error = "Username or Password is invalid";
		//session_destroy();
		header('Location:/gentelella-master/production/login.php');
	}
	$conn->close();
}
?>