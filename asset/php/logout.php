<?php
include "../../utils/auth.php";
session_start();
session_unset();
session_destroy();
logOut();
// Redirect to the login page:
header('Location: ../../index.php');
// header("Location: ../../index.php");
?>
