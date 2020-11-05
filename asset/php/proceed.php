<?php
    include "connection.php";

    $conn = OpenCon();

    if(isset($_POST['submit'])){
        $iduser = $_POST['id_user'];
        $idcoklat = $_POST['id_product'];
        $count = $_POST['count'];
        $status = $_POST["status"];
        $query = "";
        // idPembeli
        // idChoco
        // address
        // buyAmount
        // totalPrice
        // date
        // time
        // name
        if ($status == "add"){
          $query = "update chocolate set amount = amount + $count where id = $idcoklat";
          // $sql = "insert into chocolate values (NULL, 'anejng', 10000, 'assdasd', 'aaaa', 1000, 0)";
          // $conn->query($query);
          if(mysqli_query($conn, $query)){
            echo "<script>alert('Add stock success! Chocolate stocks have been added!');</script>";
            header("Location: add_stock.php?id=$idcoklat&status=$status");
          }
          else{
            echo "<script>alert('There was an Error');</script>";
            header("Location: dashboard_superuser.php?id=$idcoklat&status=$status");
          }
        }
        else if ($status == "buy"){
          $address = $_POST["address"];
          // $address = "jatinangor";
          // insert into pembelian values (1,17, "jonggol", 13, NULL, CURDATE(), CURTIME(), NULL
          $query = "insert into pembelian(idPembeli, idChoco, address, buyAmount) values ($iduser, $idcoklat, '$address', $count)";
          // $conn->query($query);
          if (mysqli_query($conn, $query)){
              echo "<script>alert('Your Chocolate Has Been Purchased');</script>";
              header("Location: history.php?id=$idcoklat&status=$status");
          }else{
            echo "<script>alert('There was an Error');</script>";
            header("Location: dashboard_user.php?id=$idcoklat&status=$status");
          }
        }else{
            echo "<script>alert('There was an Error');</script>";
            header("Location: dashboard_user.php?id=$idcoklat&status=$status");
        }
    }
?>
