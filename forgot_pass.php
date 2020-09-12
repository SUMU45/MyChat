<!DOCTYPE html>
<html>
<head>
	<title>Login To Your Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatiable" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signin-form">
		<form action="forgot_pass.php" method="post">
			<div class="form-header">
				<h2>Forgot Password</h2>
				<p>MyChat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email" placeholder="somone@site.com"
				autocomplete="off" required>

			</div>
			<div class="form-group">
				<label>Best Friend Name</label>
				<input type="text" class="form-control" name="bf" placeholder="someone.."
				autocomplete="off" required>

			</div>
			
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
			</div>
		</form>
		<div class="text-center small" style="color:#674288;">Back to signin?<a href="signin.php">
			Click here</a></div>
	</div>
	<?php

		session_start();
		include("include/conection.php");
		if(isset($_POST['submit']))
			{
				$email = $_POST['email'];
				$recovery_account = $_POST['bf'];
				//$user_email = $_SESSION['email'];
				

				$select_user="SELECT * FROM `users` WHERE `user_email` = '$email' AND `forgotten_answer` = '$recovery_account'";
				$query = mysqli_query($con,$select_user);
				$check_user = mysqli_num_rows($query);

				if($check_user == 1)
				{
				 	$_SESSION['user_email'] = $email;
				 	echo "<script>window.open('create_password.php','_self')</script>";

				}else{
				 	echo "<script>alert('your eamil or besfriend is incorrect.')</script>";
				 	echo "<script>window.open('forgot_pass.php','_self')</script>";
				}
			}
		?>

</body>
</html>
