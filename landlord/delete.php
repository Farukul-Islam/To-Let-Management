<?php

	$Id=$_GET['JobId'];
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("to-let", $con);
	// Specify the query to Insert Record
	$sql = "delete from postedads where id='".$Id."'";
	// execute query
	mysql_query ($sql,$con);
	$sql1= "SELECT * from postedads ORDER BY `id`"; 
	mysql_query ($sql1,$con);
	$sql2= "SET @count = 0"; 
	mysql_query ($sql2,$con);
	$sql3= "UPDATE `postedads`  SET `id` = @count:= @count + 1";
	mysql_query ($sql3,$con);
	$sql4="ALTER TABLE `postedads` AUTO_INCREMENT = 1";
	

	mysql_query ($sql4,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Post Deleted Succesfully");window.location=\'manageAds.php\';</script>';

?>