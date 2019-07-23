<?php
	session_start();
	$username = "";
	
	//connection
	$db = mysqli_connect('localhost','root','','to-let');

	if (isset($_POST['login'])) {
	  $username = $_POST['user_name'];
	  $password = $_POST['user_pass'];
	 

	  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	  	$results = mysqli_query($db, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['success'] = "Login Successful";
	  	  header('location: home.php');

			  $_SESSION['login']="loggedin";
			
	  	  
	  	}else {
	  		$_SESSION['failed'] =  "Wrong username/password combination";
	  	}
	  	mysqli_close($db);
	  
	}

?>