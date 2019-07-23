<?php
session_start();
if (empty($_SESSION['login'])) {
    header("location: index.php");
}
?>
<?php
if (!isset($_SESSION)) 
{
  session_start();
  
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
-->
    </style>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
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
            <div class="article">
                <h2><span><a href="#">Manage Ads</a></span></h2>
               

                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Manage Ads</strong></td>
                  </tr>
                  <tr>
                    <td><form id="form1" method="post" action="InsertJob.php">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                       
					   <table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                       
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>name</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>email</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>phone1</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">phone2</div></th>
						
						<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>homecatagory</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>amount</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>customertype</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>city</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>roadnumber</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">area</div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>housenumber</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">otherdetails</div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Showdetails</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);
// Specify the query to execute
$sql = "select * from postedads where status='Pending'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$phone1=$row['phone1'];
$phone2 =$row['phone2'];

$homecatagory=$row['homecatagory'];
$amount=$row['amount'];
$customertype=$row['customertype'];
$city=$row['city'];
$roadnumber =$row['roadnumber'];

$area=$row['area'];
$housenumber=$row['housenumber'];
$otherdetails =$row['otherdetails'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $email;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $phone1;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $phone2;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $homecatagory;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $amount;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $customertype;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $roadnumber;?></strong></div></td>
							
							<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $area;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $housenumber;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $otherdetails;?></strong></div></td>
                          
					  
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="Detailadds.php?JobId=<?php echo $Id;?>">Details</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table
                      
                    </table> 

                                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><strong>Posted Job </strong></td>
                  </tr>
                  <tr>
                    <td><table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Id</strong></div></th>
                       
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>name</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>email</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>phone1</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">phone2</div></th>
						
						<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>homecatagory</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>amount</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>customertype</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>city</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>roadnumber</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">area</div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>housenumber</strong></div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Otherdetails</strong></div></th>
                    
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">DeleteAds</div></th>
                      </tr>
                      <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);
// Specify the query to execute
$sql = "select * from postedads where status='Confirm'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$phone1=$row['phone1'];
$phone2 =$row['phone2'];

$homecatagory=$row['homecatagory'];
$amount=$row['amount'];
$customertype=$row['customertype'];
$city=$row['city'];
$roadnumber =$row['roadnumber'];

$area=$row['area'];
$housenumber=$row['housenumber'];
$otherdetails =$row['otherdetails'];

?>
                      <tr>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Id;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $name;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $email;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $phone1;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $phone2;?></strong></div></td>
                         <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $homecatagory;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $amount;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $customertype;?></strong></div></td>
                          <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $city;?></strong></div></td>
                            <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $roadnumber;?></strong></div></td>
							
							<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $area;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $housenumber;?></strong></div></td>
                        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $otherdetails;?></strong></div></td>
                      
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteAds.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
                      </tr>
                      <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                      <tr>
                        <td colspan="6" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
                      </tr>
                      <?php
// Close the connection
mysql_close($con);
?>
                    </table></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>
