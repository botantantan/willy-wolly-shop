<?php
// (A) REDIRECT USER IF ALREADY SIGNED IN

if (isset($_COOKIE["id"])){
	if ($_COOKIE["role"]==0){
		header("Location: asset/php/dashboard_user.php");
	}else{
		header("Location: asset/php/dashboard_superuser.php");
	}
}
include_once "utils/auth.php";


// (B) OUTPUT HTML ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Login</title>
        <link href="asset/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form id="login" onsubmit="return login();">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="email" placeholder="email" id="email" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<p> Don't have an account? <a href="register.php">Register</a>.</p>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
<script src="./asset/js/auth.js"> </script>
