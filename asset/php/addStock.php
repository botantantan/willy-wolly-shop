<?php
include "connection.php";
$conn = OpenCon();
$amount = $_POST["amount"];
$id = $_POST["id_product"];
$query = "update chocolate set amount = amount + $amount where id = $id";

if(mysqli_query($conn, $query)){
  header("Location: add_stock_superuser.php?id=$id&status=stockAdded");
}else{
  header("Location: add_stock_superuser.php?id=$id&status=stockAddedFailed");
}

 ?>
