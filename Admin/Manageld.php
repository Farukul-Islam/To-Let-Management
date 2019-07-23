<?php
session_start();
if (empty($_SESSION['login'])) {
    header("location: index.php");
}
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>TO-LET BD</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style3 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    


            <!-- Article -->
            <div style="text-align:center;padding-right: 200px;padding-bottom: 50px;padding-left: 200px;">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

              
				
				<p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Name</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>gender</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">email</div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>phone</strong></div></th>
						 <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>address</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">occupation</div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>NId</strong></div></th>
						 <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Delete User</strong></div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);
// Specify the query to execute
$sql = "select * from signup";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['id'];
$Name=$row['name'];
$gender=$row['gender'];

$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];

$occupation=$row['occupation'];
$NId=$row['nid'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $gender;?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $email;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $phone;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $address;?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $occupation;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $NId;?></strong></div></td>

<td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteUser.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>

<?php
// Close the connection
mysql_close($con);
?>
</table>
    </td>
  </tr>
</table>
                </p>

                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

        

</div> <!-- /main -->

</body>
</html>
