<?php
	session_start();
	$username = "";
	
	//connection
	$db = mysqli_connect('localhost','root','','ocs');

	if (isset($_POST['reg'])) {
	  
	  $username = $_POST['reg_name'];
	  $password = $_POST['reg_pass'];

  	$query = "INSERT INTO users (user_name, user_pass) VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['success1'] = "Registration Successful";
  	header('location: login.php');
  	
  	mysqli_close($db);
    
	}

	if (isset($_POST['login'])) {
	  $username = $_POST['user_name'];
	  $password = $_POST['user_pass'];
	  echo $username;

	  	$query = "SELECT * FROM users WHERE user_name='$username' AND user_pass='$password'";
	  	$results = mysqli_query($db, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['success'] = "Login Successful";
	  	  //header('location: index.php');
	  	  
	  	}else {
	  		$_SESSION['failed'] =  "Wrong username/password combination";
	  	}
	  	mysqli_close($db);
	  
	}

?>