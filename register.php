<?php session_start(); ?>
<! DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->

</head>
<body>
    <?php
    include_once "utils/auth.php";

    if (isCookieSet()){
        header('location: fix_dashboard_user.php');
        return;
    } 
    ?>
    
    <div class="register">
			<h1>Register</h1>
			<form action="./asset/php/registering.php" method="post" autocomplete="off">
				<label id="unl" for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" oninput="cekuser_event()" required >
				<div id="error_msg"></div>
				<label id="el" for="email">
					<i class="fas fa-envelope"></i>
				</label>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <label for="password">
					<i class="fas fa-lock"></i>
				</label>
                <input type="password" name="password" placeholder="Password" id="password" required oninput="cekpass_event()" required>
                <label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password"  oninput="cekpass_event()" required>
				<p> Already have an account? <a href="index.php">Login</a>.</p>
				<input type="submit" value="Register">
			</form>
		</div>
    <?php
    include_once "utils/session.php";

    $msg = get_message_and_remove();
    if (!empty($msg)) {
        echo "
        <script>
        alert('error: $msg');
        </script>
        ";
    }
    ?>
    <script src="./asset/js/reg.js"></script>
    <script src="./asset/js/password.js"></script>



</body>

</html>
