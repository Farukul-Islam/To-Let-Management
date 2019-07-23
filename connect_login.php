<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
	//connection
	$con = mysql_connect("localhost","root");
mysql_select_db("to-let", $con);
$sql = "select * from signup where email='".$UserName."' and password='".$Password."'";
$result = mysql_query($sql,$con);
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
	$fuck=$row['email'];
$_SESSION['Email']=$fuck;
header("location:landlord/ldhome.php");
$_SESSION['login1']="loggedin1";
} 
mysql_close($con);

 
?>