<?php
include 'koneksi.php';

session_start();
if(isset($_SESSION['username'])){
	header("location: utama.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet"  href="style2.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	
	<form method="post" action="proses-login.php">
	<div class="login">

		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>

		<h2>Login Form</h2>
		
		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="text" name="username" placeholder="Usename">
		</div>

		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password">
		</div>
		<!-- <?php
		if(isset($_COOKIE["message"])){
			echo $_COOKIE["message"];
		}
		?> -->
		<button type="submit" value="Login" name="btn-login">Login</button>
		</div>
		
	</div>
	</form>

</body>
</html>