<!DOCTYPE html>
<html>
<head>
	<title>Login To Your Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatiable" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link href="https://fonts,googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h3><strong>Create New Password</strong></h3>
				<p>MyChat</p>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" class="form-control" name="pass1" placeholder="Password"
				autocomplete="off" required>

			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="pass2" placeholder="Confirm Password"
				autocomplete="off" required>

			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-default" style="padding:5px;" name="change">Change</button>
			</div>
		</form>
		</div></div>
		<?php
			session_start();
			include("include/conection.php");
			
			if(isset($_POST['change'])){
				$user_email = $_SESSION['user_email'];
				
				$pass1 =$_POST['pass1'];
				$pass2 =$_POST['pass2'];
				

				if($pass1!= $pass2){
				echo "<div class='alert alert-danger'>
				<strong>Your New Password Didn't Match With Confirm Password.</strong>

				</div>";
				}
				if($pass1 < 9 AND $pass2 < 9){
					echo "<div class='alert alert-danger'>
					<strong>Use 9 or less than 9 charecters</strong>

					</div>";
				}
				if($pass1 == $pass2 ){
					

					
					$update_pass=mysqli_query($con,"UPDATE users set user_pass = '$pass2' where user_email='$user_email' ");
					if($update_pass){
					//session_destroy();

					echo "<script>alert('Go ahead and signin.')</script>";
				 	echo "<script>window.open('signin.php','_self')</script>";
					}
				}
			}

		?>

</body>
</html>

