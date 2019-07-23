<!DOCTYPE html> 
<html lang="en">
<head>
  <?php $db = mysqli_connect('localhost','root','','to-let'); ?>
<style>
.ads{
      
      margin: 2%;
      padding: 40px;
      width: 96%;
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
		margin-left: 5%;
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
.show_more {
    background-color: #6195FF;
    font-size: 17px;
    outline: 0;
    color: #fff;
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
  .blue2 :link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }
  .blue2 :visited {
      color: #2471A3;
      background-color: transparent;
      text-decoration: none;
  }
  .blue2 :hover {
      color: green;
      background-color: transparent;
      text-decoration: none;
  }
  .bottomborder{
    background: #EAF2F8;
    text-align: center;
    padding: .5px 0;  
  }
  .atitle{
    overflow: hidden;
    display: block;
    padding: 2%;
    width: 96%;
    height: 80px;
    background-color: #EAF2F8;
    border: 1px solid #4CAF50;
    text-align: center;
  }


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });
});
</script>

</head>
<body>


    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <!-- Section header -->
        <div class="section-header text-center">
          <h2 class="title">Recent Ads</h2>
        </div>
        <!-- /Section header -->

         <div class="w3-container ">
          <div class="w3-content">
            <div class="post">
               
              <div class="postList">
                  <?php
                  // Include the database configuration file
                  include 'dbConfig.php';
                  
                  // Get records from the database
                  $query = $db->query("SELECT * FROM postedads where status ='confirm' ORDER BY id DESC LIMIT 2 ");
                  
                  if($query->num_rows > 0){ 
                      while($row = $query->fetch_assoc()){ 
                          $postID = $row['id'];
						  $postArea= $row['area'];
                          $txt = $row['month'];
                          $month = date("F", strtotime($txt));
                          $year = date("Y", strtotime($txt));
                  ?>
                

                   <br>
                  <div class="borderff">
                    <div class="image">       
                        <?php
                          echo '<img height="250px" width="300px" src="data:image;base64,'.$row["image"].'">';
                        ?>
                    </div>
                    <div class="info">
                      <a class="blue2" href="addetails.php?JobId=<?php echo $postID;?>&postArea=<?php echo $postArea;?>">Click For More Details</a>
                      
                      <h5>Category : <?php echo $row["homecatagory"];?></h5>
                      <h5>Rental Cost : <?php echo $row["amount"];?></h5>
                      <h5>For : <?php echo $row["customertype"];?></h5>
                      <h5>Area : <?php echo $row["area"];?></h5>
                      <h5>City : <?php echo $row["city"];?></h5>  
                      <h5>Available from : <?php echo $month; echo " ";  echo $year;?></h5> 
                    </div> 
                    
                    
                  </div>
                    <br>
                    <br>

                 
                  <?php } ?>
                  <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
                      <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more Ads</span>
                      <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
                  </div>
                  <?php } ?>
              </div>

            </div>
          </div>
        </div>

        

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  <!-- /About -->
  
  
	

</body>
</html>