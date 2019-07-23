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
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #000;
        opacity: 0.5;
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
  
  .slct3{
    width: 49%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    margin-left: 14px;
    border: 1px solid #000;
    margin-bottom: 20px;
    opacity: 0.5;
  }
  .slct{
    width: 49%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    margin-right: 13px;
    border: 1px solid #000;
    margin-bottom: 20px;
    opacity: 0.5;
  }
  .slct2{
    width: 49%;
    height: 40px;
    background-color: #F4F4F4;
    padding-left: 5px;
    opacity: 0.5;
    border: 1px solid #000;
    margin-bottom: 20px;
  }
  .slct1{
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
  .slct5{
    width: 100%;
    height: 50px;
    background-color: #6195FF;
    color: #fff;
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
            
              <a href="index.php" > <img src="to-let.png" alt="Unload" width="40" height="40"/></a>
            
          </div>
          <!-- /Logo -->

          
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          
          <li ><a href="search.php"><i class="fa fa-search"></i> Search</a></li>
          
          <li ><a href="about.php">About us</a></li>
          <li ><a href="terms.html">Terms & Conditions</a></li>
          
          <li> <a href="#" id="btnLogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-sign-in"></i> LogIn</a></li>
          
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    

  </header>
  <!-- /Header -->

<!-- Form validation section -->

<?php

     
    $name=$password=$confirmpassword=$gender=$address=$phonenumber=$email=$occupation=$nid=$lastpassword="";

    $nameErr=$passwordErr=$confirmpasswordErr=$genderErr=$addressErr=$phonenumberErr=$emailErr=$occupationErr=$nidErr="";
      
    
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


       /* if (empty($_POST["username"]))
         {
           $usernameErr = "Username is required";
         } 
        else 
        {
           $username = test_input($_POST["username"]);
        }*/

         if (empty($_POST["password"]))
         {
           $passwordErr = " Password is required";
         } 
        else 
        {
           $password = test_input($_POST["password"]);
        }

         if (empty($_POST["confirmpassword"]))
         {
           $confirmpasswordErr = " Confirm password is required";
         } 
        else 
        {
           $confirmpassword = test_input($_POST["confirmpassword"]);
        }


       if (empty($_POST["gender"]))
         {
           $companynameErr = "Company name is required";
         } 
        else 
        {
          $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["occupation"]))
         {
           $occupationErr = " Company category is required";
         } 
        else 
        {
           $occupation = test_input($_POST["occupation"]);
        }


        if (empty($_POST["address"]))
         {
           $addressErr = "Address is required";
         } 
        else 
        {
           $address = test_input($_POST["address"]);
        }

        if (empty($_POST["nid"]))
         {
           $nidErr = "City is required";
         } 
        else 
        {
           $nid = test_input($_POST["nid"]);
        }

        /*if (empty($_POST["zip"]))
         {
           $zipErr = "Zip is required";
         } 
        else 
        {
           $zip = test_input($_POST["zip"]);
        }*/


        if (empty($_POST["phonenumber"]))
         {
           $phonenumberErr = "Phonenumber is required";
         } 
        else 
        {
           $phonenumber = test_input($_POST["phonenumber"]);
        }


         if (empty($_POST["email"]))
         {
           $emailErr = "Email is required";
         } 
        else 
        {
           $email = test_input($_POST["email"]);
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

 $conn= mysqli_connect('localhost','root','','to-let');

  if($conn)
  {
if($password==$confirmpassword)
		{       
       $sql="INSERT INTO `signup` (`id`, `name`, `gender`, `email`, `phone`, `address`, `occupation`, `nid`, `password` ) VALUES (NULL, '$name', '$gender', '$email','$phonenumber', '$address', '$occupation', '$nid', '$password')";

     $insert=mysqli_query($conn,$sql);
	 
	  $sql1="insert into `user` (uname, username, password, access) values ('$name', '$email', '$password', '2')";
	   if (mysqli_query($conn, $sql1)) {
    $last_id = mysqli_insert_id($conn);
} 
	   $sql2="insert into chatroom (chat_name, date_created, userid) values ('$name', NOW(), '$last_id')";
	   if (mysqli_query($conn, $sql2)) {
	   $cid=mysqli_insert_id($conn);
	   }
	   $sql3="insert into chat_member (chatroomid, userid) values ('$cid', '$last_id')";
	   $insert=mysqli_query($conn,$sql3); 
  
    if($insert)
    {
          echo '<script type="text/javascript">alert("Registration Successfully Completed");window.location=\'signup.php\';</script>';
    }
    else
    {

       echo '<script type="text/javascript">alert("Something Went Wrong!");window.location=\'signup.php\';</script>';
    }
  
  
    }
 
  else
  {
	    echo "<script> alert('SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...')</script>";
  }

  }
  mysqli_close($conn);

}

?>
<div class="section-header text-center">
  <br><br>
          <h2 class="title">SignUp Form</h2>
        </div>
<div class="col-md-8 col-md-offset-2">

          <form class="contact-form" id="add" action="#" method="post" >

                <input class="slct" style="border: 1px solid black;" type="text" placeholder="Full Name"  name="name" required>
             
              <select class="slct2" id="select"  name="gender" >
                <option>Gender</option>
                <option value="Male">Male</option>
                <option value="female">Female</option>
                
              </select>
              
                <input class="slct1" style="border: 1px solid black;" type="email" placeholder="Enter Email.." name="email" required>
              
                <input class="slct1" style="border: 1px solid black;" type="text" placeholder="Enter Phone.." name="phonenumber" required>
             
                <input class="slct" style="border: 1px solid black;" type="password" placeholder="Enter Password Here.." name="password" required>
              
                <input class="slct2" style="border: 1px solid black;" type="password" placeholder="Confirm Password" name="confirmpassword" required>
              
                <input class="slct1" style="border: 1px solid black;" type="text" placeholder="Enter Address Here.." name="address" required>
            
                <input class="slct1" style="border: 1px solid black;" type="text" placeholder="Enter Occupation.." name="occupation" required>
                
                <input class="slct1" style="border: 1px solid black;" type="text" placeholder="Enter NID."  name="nid" required>
               
              <input type="checkbox" required> I Agree To The <a href="terms.html">Terms And Conditions</a><br><br>
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

  <!-- /login -->
  <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="connect_login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="contain">
      <label for="uname"><b>Email</b></label>
      <input class="form2" type="text" placeholder="Enter Email" name="txtUser" id="txtUser" required>

      <label for="psw"><b>Password</b></label>
      <input class="form2" type="password" placeholder="Enter Password" name="txtPass" id="txtPass" required>
        <br>
      <button class="slct5" type="submit">Login</button>
      
    </div>

    <div class="contain" style="background-color:#f1f1f1">
      <a href="signup.php">SignUP</a>
      <span class="psw">Forgot <a href="forget/index.php">password?</a></span>
    </div>
  </form>
</div>

  <!-- jQuery Plugins -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>