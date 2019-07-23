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
  .ads{
      
      margin: 2%;
      padding: 40px;
      width: 96%;
      background-color: #EAF2F8;
    }
    
	.info{
		float:left;
		overflow:hidden;
		width: 23%;
		margin-left: 5%;
		margin: 0 20px 0 0;
		line-height: 1.6;
	}
	
	.selection-2a{
		font-size: 16px;
    width: 15%;
    float: left;
    overflow: hidden;
    padding: 15px 10px;
    background-image: none;
    border: 1px solid #000;
    color: #000000;
    margin: 30px 14px 5px 5px;
    opacity: 0.8;
	}
 
  .searchf{
    overflow: hidden;
    margin: 0 auto;
    width: 90%; 

  }

	body{
    font-family: Arial;
  }
  .border{
   overflow: hidden;
   display: block;
   background-color: #EAF2F8;
    
  }
  .image{
    overflow: hidden;
    float: left;
    padding: 2%;
    width: 24%;
    height: auto;
  }
  .info{
    font-size: 19px;
    margin-top: 33px;
    
  }
  .blue{
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }
  .blue :visited {
      color: #117A65;
      background-color: transparent;
      text-decoration: none;
  }
  .blue :hover {
      color: green;
      background-color: transparent;
      text-decoration: none;
  }
    .bottomborder{
    background: red;
    text-align: center;
    padding: .5px 0;  
  }
  .adtitle{
    overflow: hidden;
    display: block;
    margin: 2%;
    width: 96%;
    height: 60px;
    background-color: #EAF2F8;
    border: 1px solid #4CAF50;
    text-align: center;
  }
  #area{
    font-size: 16px;
    width: 15%;
    float: left;
    overflow: hidden;
    margin: 30px 10px 0 10px;
    padding: 25px 0px 24px 25px;
    border: 1px solid #000;
    height: 1px;
  }
  #city{
    font-size: 16px;
    width: 15%;
    float: left;
    overflow: hidden;
    margin: 30px 10px 0 10px;
    padding: 25px 0px 24px 25px;
    border: 1px solid #000;
    height: 1px;
  }
  #sub{
    font-size: 22px;
    width: 15%;
    float: left;
    overflow: hidden;
    margin: 30px 10px 0 10px;
    padding: 8px;
    border: 1px solid aliceblue;
    background: #6195FF;
    color: #FFF;
  }
   </style>

</head>
<body>


	
						
    <form action="search.php" method="post">
				<div class="searchf">				
				<select class="selection-2a" name="homecatagory">
					<option>Rental Category</option>
					<option>Room</option>
				  <option>Flat</option>
          <option>Parking</option>
				</select>
							
				<select class="selection-2a" name="gender">
					<option>Customer Type</option>
					
          <option>Bachelor</option>
          <option>Family</option>
				</select>

			 <select class="selection-2a" name="pricerange">
          <option>Price Range</option>
          <option>0-10k</option>
          <option>11k-20k</option>
          <option>21k-30k</option>
          <option>31k-40k</option>
          <option>41k+</option>
        </select>
       
          <input  type="text" id="area" name="area" placeholder="Enter area">
     
				

				<input type="text" id="city" name="city" placeholder="Enter city">
       <input  type="submit" id="sub"name="enter" value="Search" > 
				</div>	
    
       

		  </form>

<!-- About -->
  

    <!-- Container -->
    <div class="container">

      

         
	
<?php  

 	if (isset($_POST['enter'])) {
	 $db = mysqli_connect('localhost','root','','to-let'); 
	$homecatagory=$_POST["homecatagory"];
	$gender=$_POST["gender"];
	$area=$_POST["area"];
	$city=$_POST["city"];
  $pricerange=$_POST['pricerange'];
	

	 $sql="SELECT * FROM `postedads` WHERE status='Confirm' ";
   if($_POST['homecatagory']!=='Rental Category' ){
      $sql.="and homecatagory='$homecatagory' ";
   }
   if($_POST['gender']!=='Customer Type'){
      $sql.="and customertype='$gender' ";
   }
   if(!empty($_POST['area'])){
      $sql.="and area LIKE '$area%' ";
   }
   if(!empty($_POST['city'])){
      $sql.="and city LIKE '$city%' ";
   }
   if($_POST['pricerange']!=="Price Range")
   {
     if($pricerange==="0-10k")
        $sql.="and amount >=0 and amount <=10000";
      if($pricerange==="11k-20k")
        $sql.="and amount >=11000 and amount <=20000";
      if($pricerange==="21k-30k")
        $sql.="and amount >=21000 and amount <=30000";
      if($pricerange==="31k-40k")
        $sql.="and amount >=31000 and amount <=40000";
      if($pricerange==="41k+")
        $sql.="and amount >40000";
   }
  $max1 = mysqli_query($db,$sql);


  

    while ($row1=mysqli_fetch_array($max1)){
      $txt = $row1['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
 
?>
    
    	<br>
    <div class="border">
      <div class="image">       
          <?php
            echo '<img height="250px" width="300px" src="data:image;base64,'.$row1["image"].'">';
          ?>
      </div>
      <div class="info">
        <a class="blue" href="addetails.php?JobId=<?php echo $row1['id'];?>">Click For More Details</a>
        <h5>Category : <?php echo $row1["homecatagory"];?></h5>
        <h5>Rental Cost :<?php echo $row1["amount"];?></h5>
        <h5>For :<?php echo $row1["customertype"];?></h5>
        <h5>Area :<?php echo $row1["area"];?></h5>
        <h5>City :<?php echo $row1["city"];?></h5>
        <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5> 

      </div> 
      
      
    </div>
      <br>
      <br>

      
<?php
}

}
?>


    
    <!-- /Container -->

  </div>
  <!-- /About -->

<!-- About -->
  <div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <!-- Section header -->
        
        <!-- /Section header -->

         <div class="w3-container ">
          <div class="w3-content">
            <div class="post">
               <?php include('Ads.php'); ?>
            </div>
          </div>
        </div>

        

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </div>
  <!-- /About -->







</body>
</html>