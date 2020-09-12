<?php
session_start();

?>

<?php
include("include/conection.php");
if(isset($_POST["sub"])){
	$bfn=$_POST["content"];
	$user = $_SESSION['user_email'];

// 	if($bfn == ''){
// 		echo "<script>alert('Please enter something.')</script>";
// 		echo "<script>window.open('account_settings.php',
// 			'_self')</script>";
// exit();
	$update = "UPDATE `users` SET `forgotten_answer`='$bfn' WHERE user_email = 'rafi@gmail.com' ";
	//$run = mysqli_query($con,$update);

	if($con->query($update)==TRUE){
		echo "Phgjhbfj";

		//echo "<script>alert('Working...')</script>";
		// echo "<script>window.open('account_settings.php',
		// 	'_self')</script>";
	}else{
		//echo "<script>alert('Error while updating information')</script>";

		//echo "<script>window.open('account_settings.php','_self')</script>";
		echo "Phbfj";
	}

}
//else{
	// $update = "UPDATE `users` SET `forgotten_answer`='$bfn' WHERE user_email= '$user'";
	// //$run = mysqli_query($con,$update);

	// if(mysqli_query($con,$update)){

	// 	echo "<script>alert('Working...')</script>";
	// 	// echo "<script>window.open('account_settings.php',
	// 	// 	'_self')</script>";
	// }else{
	// 	echo "<script>alert('Error while updating 
	// 		information')</script>";
	// 	echo "<script>window.open('account_settings.php',
	// 	'_self')</script>";
	// }
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Settings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/
	bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<form class="form" action="submit.php" method="post">
			<strong>What is your school best friend name?</strong>
			<input class="form-control" cols="83" rows="4" name=
			"content" placeholder="Someone"><br>
			<button class="btn btn-default" type = "submit" name="sub
			" value = "submit" style="width: 100px;" >Submit</button>
			<h5>Answer the above the question we will ask you this 
				<br>question if you forget your Password.</h5>
		</form>
	</div>
</body>
</html>