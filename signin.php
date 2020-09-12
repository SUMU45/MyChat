<!DOCTYPE html>
<html>
<head>
	<title>Login To Your Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UL-Compatiable" content="IE=edge">
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link href="https://fonts,googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signin-form">
		<form action="signin_user.php" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Login To MyChat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="somone@site.com"
				autocomplete="off" required>

			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password"
				autocomplete="off" required>

			</div>
			<div class="small">Forget Password?<a href="forgot_pass.php">Click Here</a></div><br>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
		</form>
		<div class="text-center small" style="color:#3F33FF;">Don't Have an Account?  <a href="signup.php">Create One</a></div>

</body>
</html>
