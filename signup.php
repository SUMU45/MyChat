<!DOCTYPE html>
<html>
<head>
	<title>Create A New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UL-Compatiable" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link href="https://fonts,googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill out this form and start chating with your friends.</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Example:Sumaiya"
				autocomplete="off" required>

			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password"
				autocomplete="off" required>

			</div>
			<div class="form-group">
				<label>Email Adress</label>
				<input type="email" class="form-control" name="user_email" placeholder="somone@site.com"
				autocomplete="off" required>

			</div>

			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" reduried>
					<option disabled="">Select a country</option>
					<option>Bangladesh</option>
					<option>India</option>
					<option>USA</option>
					<option>Pakistan</option>
					<option>China</option>
					<option>France</option>
				</select>

			</div>

			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" reduried>
					<option disabled="">Select your gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>
				
				</select>

			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" reduried>I accep the <a href="#">Terms of Use</a>&amp; <a href="#">Privacy Policy</a></label>
			</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
				

			</div>
			<?php include("signup_user.php"); ?>
		</form>
		<div class="text-center small" style="color:#3F33FF;">Already Have an Account?  <a href="signin.php">Sign In Here</a></div>

</body>
</html>