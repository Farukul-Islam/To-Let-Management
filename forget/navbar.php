<!DOCTYPE html> 
<html lang="en">
<head>
     <title></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

   <script>tinymce.init({ selector:'textarea' });</script>

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
    width: 90%;
	
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
    z-index: 1; /* Sit on top */
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
    width: 80%; /* Could be more or less, depending on screen size */
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
  
.contian{
	width:80%;
}
.topnav {
  overflow: hidden;
  background-color: #222;
  margin-left: 100px;
}

.topnav a {
  float: left;
  color: #FFFFFF;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

#btnLogin{
	float:right;
}


</style>

</head>

<body>

   <nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0">
        <div class="container">
              
            <div class="navbar-header" style="margin-top: 5px;">

              <a href="index.php" > <img src="to-let.png" alt="Unload" width="40" height="40"/></a>
            </div>

             
              
        <div class="topnav">
				  <a class="active" href="../index.php">Home</a>
				  <a href="../search.php">Search For Ads</a>
				  <a href="../about.php">About</a>
				  <a href="#" id="btnLogin"class="glyphicon glyphicon-log-in" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> LogIn</a>
			</div>

      
  <div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="connect_login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input class="form2" type="text" placeholder="Enter Email" name="txtUser" id="txtUser" required><br>

      <label for="psw"><b>Password</b></label>
      <input class="form2" type="password" placeholder="Enter Password" name="txtPass" id="txtPass" required>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="contain" style="background-color:#f1f1f1">
      <a href="signup.php">SignUP</a>
      <span class="psw">Forgot <a href="index.php">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>
  </nav>
</body>
</html>