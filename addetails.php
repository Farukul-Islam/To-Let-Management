<?php

    if( $_SERVER['REQUEST_METHOD']=='GET' && isset( $_GET['ajax'] ) ){
        $postArea=$_GET['postArea'];
        $dbhost =   'localhost';
        $dbuser =   'root'; 
        $dbpwd  =   ''; 
        $dbname =   'to-let';
        $db     =   new mysqli( $dbhost, $dbuser, $dbpwd, $dbname );

        $places=array();

        $sql    =   'select 
                        `location_name` as \'name\',
                        `location_Latitude` as \'lat\',
                        `location_Longitude` as \'lng\'
                        from `maps`
                         where location_name LIKE "'.$postArea.'" ';

        $res    =   $db->query( $sql );
        if( $res ) while( $rs=$res->fetch_object() ) $places[]=array( 'latitude'=>$rs->lat, 'longitude'=>$rs->lng, 'name'=>$rs->name );
        $db->close();

        header( 'Content-Type: application/json' );
        echo json_encode( $places,JSON_FORCE_OBJECT );
        exit();
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src='https://maps.google.com/maps/api/js' type='text/javascript'></script>
   
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
  h5{
    margin-bottom: 5px;
  }
.title{
      font-weight: bold;
      padding-top: 10px;
    }
    .imagecontainer{
      overflow: hidden;
      float: left;
      padding: 10px;
      height: 500px;
      width: 58%;
      background-color: #EAF2F8;
    }
    .details{
      overflow: hidden;
      float: right;
      padding: 10px;
      height: 500px;
      width: 38%;
      background-color: #EAF2F8;
    }
    .addetails{
      overflow: hidden;
      padding: 3%;
      margin-bottom: 4%;
      height: 50%;
      background-color: #FFFFFF;

    }
    .addetails h6{
      font-size: 12px;
      margin-bottom: 13px;
    }

    .advertiserdetails{
      overflow: hidden;
      padding: 3%;
      height: 45%;
      background-color: #FFFFFF;
    }
    .advertiserdetails h6{
      font-size: 12px;
      margin-bottom: 13px;
    }
    .description{
      overflow: hidden;
      float: left;
      margin: 20px 0px 20px 0px;
      padding: 2%;
      height: 350px;
      width: 58%;
      background-color: #EAF2F8;
    }
    .map{
      overflow: hidden;
      float: right;
      margin: 20px 0px 20px 0px;
      padding: 10px;
      height: 350px;
      width: 38%;
      background-color: #EAF2F8;
    }
    .blue3 {
      color: blue;
      background-color: transparent;
      text-decoration: none;
      font-weight: bold;
     }
  
  
  #map {
      width: 100%;
      height: 100%;
      border: 1px solid blue;
    }
    #data, #allData {
      display: none;
    }
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
          
          <li class="active"><a href="search.php"><i class="fa fa-search"></i> Search</a></li>
          
          <li ><a href="about.php">About us</a></li>
          
          
          <li> <a href="#" id="btnLogin" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-sign-in"></i> LogIn</a></li>
          
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    

  </header>
  <!-- /Header -->
  
<div class="postList">
    <?php
	$ID=$_GET['JobId'];
    // Include the database configuration file
    $con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("to-let", $con);
    
    // Get records from the database
    $sql = "select * from postedads where id ='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result)
?>
  <div class="container">
    <div class="title">
      <h4>For Rent</h4>
        <h5>Location :<?php echo $row["city"];?></h5>
    </div>
    <div class="imagecontainer">
      <div class="image">
        <?php
            echo '<img height="480px" width="640px" src="data:image;base64,'.$row["image"].'">';
          ?>
      </div>
    </div>
    <div class="details">
      <div class="addetails">
        <h4>Ad details</h4>
        <hr>
        <h6>Rental Category : <?php echo $row["homecatagory"];?></h6>
		    <h6>Rental Cost : <?php echo $row["amount"];?></h6>
        <h6>For : <?php echo $row["customertype"];?></h6>
        <h6>City : <?php echo $row["city"];?></h6>
        <h6>Road Number : <?php echo $row["roadnumber"];?></h6>
        <h6>House Number : <?php echo $row["housenumber"];?></h6>
      </div>
      <div class="advertiserdetails">
        <h4>Advertiser details</h4>
        <hr>
        <h6>Name : <?php echo $row["name"];?></h6>
        <h6>Email : <?php echo $row["email"];?></h6>
		    <h6>Phone1 : <?php echo $row["phone1"];?></h6>
        <h6>Phone2 : <?php echo $row["phone2"];?></h6>
        <a class="blue3" href="chat/index.php" target="_blank">Connect To Landlord</a>
      </div>
    </div>
    <div class="description">
      <h4>Details</h4>
      <hr>
       <h5><?php echo $row["otherdetails"];?></h5>
    </div>
    <div class="map">
			
	
	<div id="map"></div>
	
	<script type='text/javascript'>
            (function(){

                var map,marker,latlng,bounds,infowin;
                /* initial locations for map */
                var _lat=23.8103;
                var _lng=90.4125;

                var getacara=0; /* What should this be? is it a function, a variable ???*/

                function showMap(){
                    /* set the default initial location */
                    latlng={ lat: _lat, lng: _lng };

                    bounds = new google.maps.LatLngBounds();
                    infowin = new google.maps.InfoWindow();

                    /* invoke the map */
                    map = new google.maps.Map( document.getElementById('map'), {
                       center:latlng,
                       zoom: 12
                    });

                    /* show the initial marker */
                    marker = new google.maps.Marker({
                       position:latlng,
                       
                       title: 'Hello World!'
					   
                    });
                    bounds.extend( marker.position );


                    /* I think you can use the jQuery like this within the showMap function? */
                    $.ajax({
                        /* 
                            I'm using the same page for the db results but you would 
                            change the below to point to your php script ~ namely
                            phpmobile/getlanglong.php
                        */
                        url: document.location.href,/*'phpmobile/getlanglong.php'*/
                        data: { 'id': getacara, 'ajax':true },
                        dataType: 'json',
                        success: function( data, status ){
                            $.each( data, function( i,item ){
                                /* add a marker for each location in response data */ 
                                addMarker( item.latitude, item.longitude, item.name );
                            });
                        },
                        error: function(){
                            output.text('There was an error loading the data.');
                        }
                    });                 
                }

                /* simple function just to add a new marker */
                function addMarker(lat,lng,title){
                    marker = new google.maps.Marker({/* Cast the returned data as floats using parseFloat() */
                       position:{ lat:parseFloat( lat ), lng:parseFloat( lng ) },
                       map:map,
                       title:title
                    });

                    google.maps.event.addListener( marker, 'click', function(event){
                        infowin.setContent(this.title);
                        infowin.open(map,this);
                        infowin.setPosition(this.position);
                    }.bind( marker ));

                    bounds.extend( marker.position );
                    map.fitBounds( bounds );
                }


                document.addEventListener( 'DOMContentLoaded', showMap, false );
            }());
        </script>
	
    </div>
  </div>
  
 
  
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
      <input class="form2" type="text" placeholder="Enter Email" name="txtUser" id="txtUser" required><br>

      <label for="psw"><b>Password</b></label>
      <input class="form2" type="password" placeholder="Enter Password" name="txtPass" id="txtPass" required>
        
      <button type="submit">Login</button>
      
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