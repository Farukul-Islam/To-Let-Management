<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>


  <style>

  	.footer{
  		overflow: hidden;
  		background-color: #212F3C;
  	}

	html {
	  	}

	body {
	  background: #c1bdba;
	  font-family: 'Titillium Web', sans-serif;
	}

	a {
	  text-decoration: none;
	  color: #1ab188;
	  
	}
	a:hover {
	  color: #179b77;
	}

	.feedback {
	  float: left;
	  padding-left: 8%;
	  max-width: 500px;
	  margin: 40px auto;
	  border-radius: 8px;
	  width: 50%;
	}
	.form {
	  font-size: 12px;
	  display: block;
	  width: 100%;
	  height: 100%;
	  padding: 10px 10px;
	  background: none;
	  background-image: none;
	  border: 1px solid #ABB2B9;
	  color: #ffffff;
	  border-radius: 0;
	  margin: 5px;
	}
	input:focus, textarea:focus {
	  outline: 0;
	  border-color: #1ab188;
	}


	.button {
	  border: 1px solid #ABB2B9;
	  outline: none;
	  padding: 5px 0;
	  font-size: 15px;
	  font-weight: 300;
	  text-transform: uppercase;
	  background: #212F3C;
	  color: #ffffff;
	  margin: 5px;
	}
	.button:hover, .button:focus {
	  background: #34495E;
	}

	.button-block {
	  display: block;
	  width: 100%;
	}
	.social{
		overflow: hidden;
		width: 50%;
		padding: 5% 0px 0px 30%; 
	}
	.fa-facebook {
	  background: #3B5998;
	  color: white;
	}

	.fa-twitter {
	  background: #55ACEE;
	  color: white;
	}

	.fa-instagram {
	  background: #dd4b39;
	  color: white;
	}
	.fa {
	  padding: 10px;
	  font-size: 17px;
	  width: 40px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	  border-radius: 40%;
	  text-decoration: none;
	}
	.level{
		color: white;
		text-decoration: none;

	}
	
	
	
  </style>

</head>
<body>
	<div class="footer">
		<div class="feedback">
			<form method="post" action="#">
				<input class="form" type="text" name="fbname" placeholder="Your Name" required>
				
				<input class="form" type="textarea" name="feedback" placeholder="Your Feedback" required>
				
				<button class="form" type="submit" name="fbsubmit" class="button button-block"/>Submit</button>
			</form>

		</div>
		<div class="social">
			<label class="level">All Right Reserved @2018 To-Let BD</label>
			<label class="level">Contact Us On</label>
			<a href="https://www.facebook.com/profile.php?id=100008311158241" class="fa fa-facebook"></a>
			<a href="" class="fa fa-twitter"></a>
			<a href="" class="fa fa-instagram"></a>
		</div>
	</div>
<?php
	$db = mysqli_connect('localhost','root','','to-let');

	if (isset($_POST['fbsubmit'])) {
	  
	  $fbname = $_POST['fbname'];
	  $feedback = $_POST['feedback'];

  	$query = "INSERT INTO feedback (name, feedback) VALUES('$fbname', '$feedback')";
  	mysqli_query($db, $query);	
  	mysqli_close($db);
    
	}
?>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc6a64208387933e5bb93e3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>