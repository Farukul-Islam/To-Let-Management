<?php
	include('conn.php');
	session_start();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=$_POST['username'];
		
			
		$fusername=$username;
		
		$password =$_POST["password"];
		$fpassword=$password;
		$fname = $_POST["name"];
		
		mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$fname', '$fusername', '$fpassword', '2')");
		
		$_SESSION['msg'] = "Sign up successful. You may login now!"; 
		header('location: index.php');
		
	}
?>