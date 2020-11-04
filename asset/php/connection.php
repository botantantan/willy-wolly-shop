<?php


function OpenCon(){
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'willywonka';
  $conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME) or die("Connect failed: %s\n". $conn -> error);
  // Try and connect using the info above.
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if (mysqli_connect_errno()) {
  	// If there is an error with the connection, stop the script and display the error.
  	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  return $conn;
}

function CloseCon($conn){
  $conn -> close();
}
 ?>
