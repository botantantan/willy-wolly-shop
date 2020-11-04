<?php
  include "connection.php";
  $conn = OpenCon();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/history.css">
    <title></title>
  </head>
  <body>
    <div class="header">
      <a href="#" class="left1">Home</a>
      <a href="#" class="left2">History</a>
      <form class="search" action="index.html" method="post">
        <input class="search-box" type="text" placeholder="Search....." name="" value="">
      </form>
      <a href="#" class="right">Logout</a>
    </div>

    <div class="transaction">
      <h2>Transaction History</h2>
      <table>
        <tr>
          <th>Chocolate Name</th>
          <th>Amount</th>
          <th>Total Price</th>
          <th>Date</th>
          <th>Time</th>
          <th>Address</th>
        </tr>
        <?php
        $idPelanggan = 1;

        $hasil= $conn->query("select * from pembelian where idPembeli = $idPelanggan");
        while($row = mysqli_fetch_assoc($hasil)){
            echo "
              <tr>
                <td>".$row["name"]."</td>
                <td>".$row["buyAmount"]."</td>
                <td>".$row["totalPrice"]."</td>
                <td>".$row["date"]."</td>
                <td>".$row["time"]."</td>
                <td>".$row["address"]."</td>
              </tr>
              ";
            }
        CloseCon($conn);
      ?>
      </table>
    </div>

    <section id="footer-bar">
      <div class="foot">
        <div class="span3">
          <h4>Navigation</h4>
          <ul class="nav">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./contact.html">Contac Us</a></li>
            <li><a href="./cart.html">Your Cart</a></li>
            <li><a href="./register.html">Login With Another Account</a></li>
          </ul>
        </div>
        <div class="span4">
          <h4>My Account</h4>
          <ul class="nav">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
          </ul>
        </div>
      </div>
      <div class="span5">
        <p class="logo">Willy Willyan</p>
        <p>Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. the  Lorem Ipsum has been the industry's
          standard dummy text ever since the you.</p>
        <br/>
      </div>
    </section>

    <section id="copyright">
      <span>Copyright 2013 bootstrappage template  All right reserved.</span>
    </section>

  </body>
</html>
