<?php
  session_start();
  if (empty($_SESSION['login1'])) {
    header("location: ../index.php");
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
  
.slct{
    width: 49%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    margin-right: 21px;
    border: 1px solid #000;
    margin-bottom: 20px;
    opacity: 0.5;
  }
  .slct2{
    width: 48%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    opacity: 0.5;
    border: 1px solid #000;
    margin-bottom: 20px;
  }
  .slct3{
    width: 100%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    opacity: 0.5;
    border: 1px solid #000;
    margin-bottom: 20px;
  }
  .slct4{
    width: 65%;
    height: 40px;
    background-color: #6195FF;
    color: #fff;
    margin: 0px 0px 20px 231px;
    border: 1px solid aliceblue;
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
          
          <li class="active"><a href="postad.php"> Post Ad</a></li>
          
          <li ><a href="manageAds.php">Manage Ads</a></li>
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


<!-- Form validation section -->

<?php

     
    $name=$email=$phone1=$phone2=$homecatagory=$amount=$customertype=$city=$roadnumber=$area=$housenumber=$other=$image=$month="";

    $nameErr=$emailErr=$phone1Err=$phone2Err=$homecatagoryErr=$amountErr=$customertypeErr=$cityErr=$roadnumberErr=$housenumberErr=$areaErr=$otherErr=$imageErr=$monthErr="";
      
    
//if($_SERVER["REQUEST_METHOD"] == "POST")
   
   if(isset($_POST["submit"]))
   {
        
        
        if (empty($_POST["name"]))
         {
           $nameErr = "Name is required";
         } 
        else 
        {
           $name = test_input($_POST["name"]);
        }


         if (empty($_POST["email"]))
         {
           $emailErr = " Email is required";
         } 
        else 
        {
           $email = test_input($_POST["email"]);
        }


         if (empty($_POST["phone1"]))
         {
           $phone1Err = " Phone 1 is required";
         } 
        else 
        {
           $phone1 = test_input($_POST["phone1"]);
        }

         if (empty($_POST["phone2"]))
         {
           $phone2Err = " Phone 2 is required";
         } 
        else 
        {
           $phone2 = test_input($_POST["phone2"]);
        }


        if (empty($_POST["homecatagory"]))
         {
           $homecatagoryErr = "Home Catagory name is required";
         } 
        else 
        {
           $homecatagory = test_input($_POST["homecatagory"]);
        }

        if (empty($_POST["amount"]))
         {
           $amountErr = " Amount is required";
         } 
        else 
        {
           $amount = test_input($_POST["amount"]);
        }


        if (empty($_POST["customertype"]))
         {
           $customertypeErr = "Customer Type is required";
         } 
        else 
        {
           $customertype = test_input($_POST["customertype"]);
        }

        if (empty($_POST["city"]))
         {
           $cityErr = "City is required";
         } 
        else 
        {
           $city = test_input($_POST["city"]);
        }

        if (empty($_POST["roadnumber"]))
         {
           $roadnumberErr = "Road Number is required";
         } 
        else 
        {
           $roadnumber = test_input($_POST["roadnumber"]);
        }


        if (empty($_POST["area"]))
         {
           $areaErr = "Area is required";
         } 
        else 
        {
           $area = test_input($_POST["area"]);
        }


         if (empty($_POST["housenumber"]))
         {
           $housenumberErr = "Housenumber is required";
         } 
        else 
        {
           $housenumber = test_input($_POST["housenumber"]);
        }

		
		    if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
            echo "Please Insert Image";
        }
        else{
          $image= addslashes($_FILES['image']['tmp_name']);
          $image= file_get_contents($image);
          $image= base64_encode($image);
        }


        if (empty($_POST["other"]))
         {
           $otherErr = "Details is required";
         } 
        else 
        {
           $other = test_input($_POST["other"]);
        }
        if (empty($_POST["month"]))
         {
           $monthErr = "Name is required";
         } 
        else 
        {
           $month = test_input($_POST["month"]);
        }

    }


   function test_input($data) 
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


?>


<?php 
 
if(isset($_POST["submit"]))
 {
  $date = date('d/m/Y');

 $conn= mysqli_connect("localhost","root","","to-let");

  if($conn)
  {

      echo "Database Connected"."<br><br>";
	 
    
       $sql="INSERT INTO `postedads` (`id`,`status`,`date`,`name`, `email`, `phone1`, `phone2`, `homecatagory`, `amount`, `customertype`, `month`, `city`, `roadnumber`, `area`, `housenumber`, `otherdetails`, `image`) 
	   VALUES (NULL,'Pending','$date', '$name','$email','$phone1','$phone2','$homecatagory','$amount','$customertype','$month','$city','$roadnumber','$area','$housenumber','$other','$image'); ";
     $insert=mysqli_query($conn,$sql);
  
    if($insert)
    {
          echo '<script type="text/javascript">alert("Post Request Successfully Done. Please Wait For Approval");window.location=\'postad.php\';</script>';
    }
    else
    {

       echo "Data NOT inserted"."<br>";
    }
  
  
  }


  mysqli_close($conn);

}

?>
<div class="section-header text-center">
  <br><br>
          <h2 class="title">Post Your Advertise Here</h2>
        </div>

<div class="col-md-8 col-md-offset-2">
    
  
        <form class="contact-form" id="add" action="#" method="post" enctype="multipart/form-data">
        
                
                <input class="slct3" type="text" placeholder="Full Name" name="name" style="border: 1px solid black;" required>
              
			 
			       
                <input class="slct3" style="border: 1px solid black;" type="email" placeholder="Enter Email" name="email" required>
              

            
                <input class="slct" style="border: 1px solid black;" type="text" placeholder="Enter Phone 1" name="phone1" required>
              

              
                <input class="slct2" style="border: 1px solid black;" type="text" placeholder="Enter Phone 2" name="phone2" >
             

                <select class="slct" id="select" name="homecatagory" required>
                <option>Rental Catagory</option>
                <option>Room</option>
                <option>Flat</option>
                <option>Parking</option>
                </select>

                <input class="slct2" type="number" min="1" placeholder="Rental Cost" name="amount" required>
              

                <select class="slct" id="select" placeholder="Enter Company category Here.."  name="customertype" required>
                
                <option>Customer Type</option>
                <option>Bachelor</option>
                <option>Family</option>
                </select>
              

              
                
                <input class="slct2" type="text" onfocus="(this.type='month')" onblur="(this.type='text')" placeholder="Available From" name="month" required>
               <br><br>
            <h3>Address</h3>
          
                <input class="slct" style="border: 1px solid black;" type="text" placeholder="Enter City Here.."  name="city" required>
              

              
                <input class="slct2" style="border: 1px solid black;" type="text" placeholder="Enter Road Number Here.."  name="roadnumber" >
             

            
                <input class="slct" style="border: 1px solid black;" type="text" placeholder="Enter Area Here.."  name="area" required>
              

              
                <input class="slct2" style="border: 1px solid black;" type="text" placeholder="Enter House Number Here.." name="housenumber" required>
            
		            <input class="slct3" style="border: 1px solid black;" type="file"  value="Choose picture"  name="image" required>
            

            
                <textarea class="input" style="border: 1px solid black;" type="text" placeholder="Enter Other Details Here.."  name="other" required></textarea>
            
            

                <input type="checkbox"  required> I Agree To The <a href="terms2.html">Terms And Conditions</a><br><br>
                
            </div> 
            <input class="slct4" type="submit" name="submit" required>
                   
          
        </form> 
        
   </div> 

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