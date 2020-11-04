<?php
$con = mysqli_connect("localhost", "root", "", "willywonka");
$sql = "SELECT  FROM accounts"; 
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Register</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		<div class="register">
			<h1>Register</h1>
			<form action="register.php" method="post" autocomplete="off">
				<label id="unl" for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" oninput="cekuser_event()" required >
				<div id="error_msg"></div>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label id="el" for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
				<p> Already have an account? <a href="../../index.html">Login</a>.</p>
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>
<script src="../js/reg.js"> </script>
<script src="../js/check_email.js"> </script>
<script src="../js/check_setcook.js"> </script>
