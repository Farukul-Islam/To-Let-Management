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
          
          <li class="active"><a href="about.php">About us</a></li>
          <li ><a href="terms.html">Terms & Conditions</a></li>
          
          <li> <a href="#" id="btnLogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-sign-in"></i> LogIn</a></li>
          
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    

  </header>
  <!-- /Header -->
	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->

				

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team12.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Shuvo</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team13.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Mithun</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->
				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="img/team14.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Sajeeb</h3>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	
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