<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
 .ads{
      
      margin: 2%;
      padding: 40px;
      
      background-color: #D5F5E3;
      border: 1px solid #4CAF50;
    }
    .atitle{
      overflow: hidden;
      display: block;
      margin: 2%;
      padding: 10px;
      width: 96%;
      background-color: #D5F5E3;
      border: 1px solid #4CAF50;
      text-align: center;
    }
	.info{
		float:left;
		overflow:hidden;
		width: 40%;
		margin-left: 3%;
    padding-top: 23px;
	}
	
	.list_item {
    background-color: #F1F1F1;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    margin: 5px 15px 2px;
    padding: 2px;
    font-size: 14px;
    line-height: 1.5;
}
.show_more_main {
    margin: 15px 25px;
}
.show_more {
    background-color: #f8f8f8;
    background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
    background-image: linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
    border: 1px solid;
    border-color: #d3d3d3;
    color: #333;
    font-size: 12px;
    outline: 0;
}
.show_more {
    cursor: pointer;
    display: block;
    padding: 10px 0;
    text-align: center;
    font-weight:bold;
}
.loding {
    background-color: #e9e9e9;
    border: 1px solid;
    border-color: #c6c6c6;
    color: #333;
    font-size: 12px;
    display: block;
    text-align: center;
    padding: 10px 0;
    outline: 0;
    font-weight:bold;
}
.loding_txt {
    background-image: url(loading.gif);
    background-position: left;
    background-repeat: no-repeat;
    border: 0;
    display: inline-block;
    height: 16px;
    padding-left: 20px;
} 
  
.borderff{
   overflow: hidden;
   display: block;
   background: transparent;
   border: 1px solid white;
   width: 80%;
  }
  .image{
    overflow: hidden;
    float: left;
    padding: 2%;
    width: 40%;
    height: auto;
  }
  .info h5{
    font-size: 15px;
    color: #fff;
  }
  
 

  </style>
</head>
<body>
  <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <!-- Section header -->
        
        <!-- /Section header -->

         <div class="w3-container ">
          <div class="w3-content">
            <div class="post">

<div class="contain">
  
  
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    

	
	
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	  
	  <?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $query = $db->query("SELECT * FROM postedads where status ='confirm' and id = (SELECT MAX(id) FROM postedads) ");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
          $txt = $row['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
            
    ?>
	
	
       <div class="borderff">
      <div class="image">       
          <?php
            echo '<img height="250px" width="300px" src="data:image;base64,'.$row["image"].'">';
          ?>
      </div>
      <div class="info">

        <a class="blue2" href="addetails.php?JobId=<?php echo $row['id'];?>&postArea=<?php echo $row['area'];?>">Click For More Details</a>
        <br><br>
        <h5>Category : <?php echo $row["homecatagory"];?></h5>
        <h5>Amount : <?php echo $row["amount"];?></h5>
        <h5>For : <?php echo $row["customertype"];?></h5>
        <h5>Area : <?php echo $row["area"];?></h5>
        <h5>City : <?php echo $row["city"];?></h5> 
        <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5>  
      </div> 
      
      
    </div>
	
	
	<?php } ?>
    
    <?php } ?>
	
      </div>

      <div class="item">
        <?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $query = $db->query("SELECT * FROM postedads where status ='confirm' and id = (SELECT MAX(id-1) FROM postedads) ");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
          $txt = $row['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
            
    ?>
       <div class="borderff">
      <div class="image">       
          <?php
            echo '<img height="250px" width="300px" src="data:image;base64,'.$row["image"].'">';
          ?>
      </div>
      <div class="info">
        <a class="blue2" href="addetails.php?JobId=<?php echo $row['id'];?>&postArea=<?php echo $row['area'];?>">Click For More Details</a>
        <br><br>
        <h5>Category : <?php echo $row["homecatagory"];?></h5>
        <h5>Amount : <?php echo $row["amount"];?></h5>
        <h5>For : <?php echo $row["customertype"];?></h5>
        <h5>Area : <?php echo $row["area"];?></h5>
        <h5>City : <?php echo $row["city"];?></h5> 
        <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5>  
      </div> 
      
      
    </div>
	
	<?php } ?>
    
    <?php } ?>
      </div>
    
      <div class="item">
       <?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $query = $db->query("SELECT * FROM postedads where status ='confirm' and id = (SELECT MAX(id-2) FROM postedads) ");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
          $txt = $row['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
           
    ?>
	<div class="borderff">
      <div class="image">       
          <?php
            echo '<img height="250px" width="300px" src="data:image;base64,'.$row["image"].'">';
          ?>
      </div>
      <div class="info">
        <a class="blue2" href="addetails.php?JobId=<?php echo $row['id'];?>&postArea=<?php echo $row['area'];?>">Click For More Details</a>
        <br><br>
        <h5>Category : <?php echo $row["homecatagory"];?></h5>
        <h5>Amount : <?php echo $row["amount"];?></h5>
        <h5>For : <?php echo $row["customertype"];?></h5>
        <h5>Area : <?php echo $row["area"];?></h5>
        <h5>City : <?php echo $row["city"];?></h5> 
        <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5> 
      </div> 
      
      
    </div>
	<?php } ?>
    
    <?php } ?>
      </div>

      <div class="item">
<?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get records from the database
    $query = $db->query("SELECT * FROM postedads where status ='confirm' and id = (SELECT MAX(id-3) FROM postedads) ");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
          $txt = $row['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
            
    ?>
       <div class="borderff">
      <div class="image">       
          <?php
            echo '<img height="250px" width="300px" src="data:image;base64,'.$row["image"].'">';
          ?>
      </div>
      <div class="info">
        <a class="blue2" href="addetails.php?JobId=<?php echo $row['id'];?>">Click For More Details</a>
        <br><br>
        <h5>Category : <?php echo $row["homecatagory"];?></h5>
        <h5>Amount : <?php echo $row["amount"];?></h5>
        <h5>For : <?php echo $row["customertype"];?></h5>
        <h5>Area : <?php echo $row["area"];?></h5>
        <h5>City : <?php echo $row["city"];?></h5> 
        <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5> 
      </div> 
      
      
    </div>
	<?php } ?>
    
    <?php } ?>
      </div>
    </div>

    <!-- Left and right controls -->
    
  </div>
</div>
</div>
          </div>
        </div>

        

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  <!-- /About -->

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 5000});
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

</body>
</html>
