<?php
$connect = mysqli_connect("localhost", "root", "", "willywonka"); 
if(isset($_POST["email"]))
{
$email = mysqli_real_escape_string($connect, $_POST["email"]);
$query = "SELECT * FROM accounts WHERE email = '".$email."'";
$result = mysqli_query($connect, $query);
echo mysqli_num_rows($result);
}
?>