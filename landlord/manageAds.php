<?php
  session_start();
  if (empty($_SESSION['login1'])) {
    header("location: ../index.php");
  }
?>
<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>To-Let BD</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Owl Carousel -->
 
  <!-- Magnific Popup -->
  

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style>
    .form2 {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 15px 0;
    border: none;
    display:block;
    cursor: pointer;
    width:  100%;
  
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.contain {
  overflow:hidden;
    padding: 16px;
  width:100%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
  overflow:hidden;
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999999999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  overflow:hidden;
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  
.fk{
padding-left:8px;

}

.fk th td{
       margin: 25px 0 15px 0;
       color: #000;
}
</style>
</head>

<body>
  <!-- Header -->
  <header >
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/bg2.jpg');">
      <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            
              <a href="../index.php" > <img src="to-let.png" alt="Unload" width="40" height="40"/></a>
            
          </div>
          <!-- /Logo -->

          
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li ><a href="ldhome.php">Home</a></li>
          
          <li ><a href="postad.php"> Post Ad</a></li>
          
          <li class="active"><a href="manageAds.php">Manage Ads</a></li>
          <li><a href="chat/index.php" target="_blank">ChatRoom </a></li>
          <li ><a href="terms2.html">Terms & Conditions</a></li>
          
          <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    

  </header>
  <!-- /Header -->
  <div class="section-header text-center">
    <br><br>
          <h2 class="title">Manage Your Ads Here</h2>
        </div>
        <br><br>
<div class="fk">
  
  
  <table width="100%" border="1" bordercolor="#1CB5F1" >
                      <tr>
                        <th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5">Id</div></th>
                       
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>name</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Email</strong></div></th>
                          <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Phone1</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12"><strong>Phone2</strong></div></th>
						
						<th height="32" bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Homecatagory</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Amount</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Customertype</strong></div></th>
                         <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>City</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Roadnumber</strong></div></th>
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12"><strong>Area</strong></div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Housenumber</strong></div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Otherdetails</strong></div></th>
						<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>Status</strong></div></th>
                    
                        <th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12"><strong>DeleteAds</strong></div></th>
                      </tr>
                      <?php
					  
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);


// Specify the query to execute
$sql = "select * from postedads where email='".$_SESSION['Email']."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['id'];
$status=$row['status'];
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
						 <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $status;?></strong></div></td>
                      
                        <td class="style3"><div align="left" class="style9 style5"><strong><a href="delete.php?JobId=<?php echo $Id;?>">Delete</a></strong></div></td>
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
</div>
<br><br>
<!-- Footer -->
  <footer id="footer" class="sm-padding bg-dark">

    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <div class="col-md-12">

          <!-- footer logo -->
          <div class="footer-logo">
            <h1 class="white-text">To-Let BD</h1>
          </div>
          <!-- /footer logo -->

          <!-- footer follow -->
          <ul class="footer-follow">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
          <!-- /footer follow -->

          <!-- footer copyright -->
          <div class="footer-copyright">
            <p>Copyright © 2018. All Rights Reserved. Designed by <a href="#" target="_blank">To-Let BD</a></p>
          </div>
          <!-- /footer copyright -->

        </div>

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </footer>
  <!-- /Footer -->

  <!-- Back to top -->
  <div id="back-to-top"></div>
  <!-- /Back to top -->

  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  

  <!-- jQuery Plugins -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
