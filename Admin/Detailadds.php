<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>To-LetBD</title>
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
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
              <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

               <?php
$ID=$_GET['JobId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);
// Specify the query to execute
$sql = "select * from postedads where id ='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result)
?>
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>ID:</td>
                    <td><?php echo $row['id'];?></td>
                  </tr>
                  <tr>
                    <td>Name:</td>
                    <td><?php echo $row['name'];?></td>
                  </tr>
                  <tr>
                    <td>email:</td>
                    <td><?php echo $row['email'];?></td>
                  </tr>
                  <tr>
                    <td>phone1:</td>
                    <td><?php echo $row['phone1'];?></td>
                  </tr>
                  <tr>
                    <td>phone2:</td>
                    <td><?php echo $row['phone2'];?></td>
                  </tr>
                  <tr>
                    <td>homecatagory:</td>
                    <td><?php echo $row['homecatagory'];?></td>
                  </tr>
                 
				 
				 <tr>
                    <td>amount:</td>
                    <td><?php echo $row['amount'];?></td>
                  </tr>
                  <tr>
                    <td>customertype:</td>
                    <td><?php echo $row['customertype'];?></td>
                  </tr>
                  <tr>
                    <td>city:</td>
                    <td><?php echo $row['city'];?></td>
                  </tr>
                  <tr>
                    <td>roadnumber:</td>
                    <td><?php echo $row['roadnumber'];?></td>
                  </tr>
                  <tr>
                    <td>area:</td>
                    <td><?php echo $row['area'];?></td>
                  </tr>
                  <tr>
                    <td>housenumber:</td>
                    <td><?php echo $row['housenumber'];?></td>
                  </tr>
				  <tr>
                    <td>otherdetails:</td>
                    <td><?php echo $row['otherdetails'];?></td>
                  </tr>
				 
				 
                  <tr>
                    <td><strong><a href="Approveadds.php?JoId=<?php echo $row['id'];?>">Approv adds</a></strong></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>


              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
