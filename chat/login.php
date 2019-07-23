<?php
	include('conn.php');
	session_start();

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=$_POST['username'];
		
		
			
		$fusername=$username;
		
		$password = $_POST["password"];
		$fpassword=($password);
		
		$query=mysqli_query($conn,"select * from `user` where username='$fusername' and password='$fpassword'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
			header('location: index.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['access']==1){
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='admin/';
				</script>
				<?php
			}
			else{
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Success, Welcome User!');
					window.location.href='user/';
				</script>
				<?php
			}
		}
		
		
	}
?>