<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","to-let");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>