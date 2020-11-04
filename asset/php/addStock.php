<?php
  include "connection.php";
  $conn = OpenCon();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/43978b739a.js" crossorigin="anonymous"></script>
    <link href="../css/addStock.css" rel="stylesheet"/>
    <title>Add Stock</title>
  </head>
  <body>

    <div class="header">
      <a href="#" class="left1">Home</a>
      <a href="#" class="left2">Add New Chocolate</a>
      <form class="search" action="index.html" method="post">
        <input class="search-box" type="text" placeholder="Search....." name="" value="">
      </form>
      <a href="#" class="right">Logout</a>
    </div>
    <?php
      // $id_product = $_GET["id_product"];
        $id_product = 5;
      $sqlProducts =
      "
      select *
      from chocolate
      where id = $id_product
      ";
      $hasilProducts = $conn -> query($sqlProducts);
      $products = $hasilProducts->fetch_assoc();
     ?>
    <div class="stock-container">
      <div class="stock">
        <div class="stock-choco">
          <h2>Buy Chocolate <br><br></h2>
          <?php
            echo "
            <img src=".$products["location"]." alt='Chocolate Image'>
            ";

          ?>
        </div>
        <div class="choco-details-awal">
          <div class="smaller" id='small'>
          <?php
          // $remain = $products["amount"]*1 - $products["sold"]*1;
          // echo "$products["amount"]";
          // echo "$products["sold"]";
          $remain = 103;
          echo "
          <input id='price' value=".$products["price"]." disabled style='display:none;'>
          <input id='remaining' value=".$remain." disabled style='display:none;'>
            <h2 class='smaller'>Choco Name: ".$products["name"]."</h2>
            <h2 class='smaller'>Amount sold: ".$products["sold"]."</h2>
            <h2 class='smaller'>Price: ".$products["price"]."</h2>
            <h2 class='smaller'>Amount remaining: ".$remain." </h2>
            <div class='choco-des'>
              <h2  class='smaller'>Description</h2>
              <p>".$products["description"]."</p>
            </div>
          ";
          ?>
        </div>
          <div class="amount" id="amount" style="display:none;">
            <div class="amount-to-buy">
              <div class="to-buy">
                <h2>Amount to add: </h2>
                <div class="input-amount" id="input-amount">
                  <button type="button" name="button" onclick="minus()"><i class="fas fa-minus-circle" ></i></button>
                  <input type="text" value="1" id="count" disabled style="border:0px; text-align:center;">
                  <button type="button" name="button" onclick="plus()"><i class="fas fa-plus-circle" ></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="execute">
      <form class="" action="index.html" method="post">
        <button type="button" name="button" onclick="muncul()" id="buyNow"><a href="#" >Buy Now</a></button>
        <!-- <button type="button" name="button"  id="cancel"><a href="#" >Cancel</a></button> -->
        <!-- <button type="button" name="button"  id="proceed"><a href="#" >Buy</a></button> -->
      </form>
    </div>
    <div class="execute-akhir" id="execute-akhir">
      <form class="" action="index.html" method="post" id="after-buyNow">
        <button type="button" name="button"  id="cancel"><a href="#" >Cancel</a></button>
        <button type="button" name="button"  id="proceed"><a href="#" >Buy</a></button>
      </form>
    </div>
    <script src="../js/buy.js" charset="utf-8"></script>
  </body>
</html>
