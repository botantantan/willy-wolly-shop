<?php
  include "connection.php";
  $conn = OpenCon();
  echo "berhasil connect ";
  // id
  // name
  // price
  // description
  // location
  // amount
  // sold
  // $stmt = $con->prepare("INSERT INTO chocolate(name,price,desc,chocoImg,amount) VALUES (?, ?, ?, ?, ?)");
  $stmt = $conn->prepare("INSERT INTO chocolate VALUES (NULL, ?, ?, ?, ?, ?, 0)");
  echo "berhasil prepare ";
  // $_POST[""]
  $stmt->bind_param("sissi", $_POST["name"], $_POST["price"], $_POST["desc"], $_POST["chocoImg"], $_POST["amount"]);

  // echo "$_POST['name']";
  // echo "$_POST['price']";
  // echo "$_POST['amount']";

  echo $_POST['name'];
  echo " ";
  echo $_POST['price'];
  echo " ";
  echo $_POST['amount'];
  echo " ";

  if(empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["amount"])){
    exit('Please complete the form');
  }

  // if (filter_var($_POST["price"]), FILTER_VALIDATE_INT) === 0 ||
  //   !filter_var($_POST["price"]), FILTER_VALIDATE_INT) === false){
  //     exit("Price is not valid");
  // }
  //
  // if (filter_var($_POST["amount"]), FILTER_VALIDATE_INT) === 0 ||
  //   !filter_var($_POST["amount"]), FILTER_VALIDATE_INT) === false){
  //     exit("Amount is not valid");
  // }
  // $sql = "INSERT INTO chocolate VALUES (1, $_POST['name'], $_POST['price'], $_POST['desc'], $_POST['chocoImg'], $_POST['amount'], 0)";
  // $sql = "insert into chocolate values (NULL, 'anejng', 10000, 'assdasd', 'aaaa', 1000, 0)";
  // $conn->query($sql);
  $stmt->execute();
  $stmt->close();
  echo "berhasil execute";
  CloseCon($conn);



 ?>
