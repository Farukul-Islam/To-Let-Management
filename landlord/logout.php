<?php
	session_start();
	unset($_SESSION['login1']);

   session_destroy();
   if(empty($_SESSION['login1']))
   header("location: ../index.php");
else
	header("location: ldhome.php");
?>