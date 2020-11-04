<?php
$connect = mysqli_connect("localhost", "root", "", "willywonka"); 
if(isset($_POST["username"]))
{
$username = mysqli_real_escape_string($connect, $_POST["username"]);
$query = "SELECT * FROM accounts WHERE username = '".$username."'";
$result = mysqli_query($connect, $query);
echo mysqli_num_rows($result);
}
?>