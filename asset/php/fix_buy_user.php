<?php
  include "connection.php";
  $conn = OpenCon();
?>

<html html>
    <head>
        <title>Buy</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <script src="https://kit.fontawesome.com/43978b739a.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navtop">
			<div>
                <a href="dashboard.html"><i class="fas fa-home"></i>Home</a>
                <a href="#"><i class="fas fa-bars"></i>History</a>
                <div class="navtop-middle">
                    <div class="container">
                        <i class="fas fa-search"></i>
                        <form class="search" action="index.html" method="post">
                            <input type="search" id="search" placeholder="Search..." name="search-box">
                        </form>
                    </div>
                </div>
                <div class="navtop-right">
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>
		</nav>

        <?php
            $id_product = 5;
            $sqlProducts = "SELECT * FROM chocolate WHERE id=$id_product";
            $hasilProducts = $conn -> query($sqlProducts);
            $products = $hasilProducts -> fetch_assoc();
        ?>

        <div class="content">
			<h2>Buy Stock</h2>
            <div>
                <div class="content-product">
                    <div class="item">
                        <table>
                          <?php
                          $remain = 103;
                          echo "
                            <tr>
                                  <div class='product-box'>
                                      <img class='box' src= ".$products["location"]." alt='image'>
                                  </div>
                              </tr>
                              <tr>

                                  <td><h3 name='product-name'>".$products["name"]."</h3></td>
                              </tr>
                              <tr>
                                  <td><p name='product-amount-sold'>Amount sold: </p>".$products["sold"]."</td>
                              </tr>
                              <tr>
                                  <td><input id='price' value= ".$products["price"]."  name='product-price' disabled style='display: none;'>Price: ".$products["price"]."</td>
                              </tr>
                              <tr>
                                  <td><input id='remaining' value=".$remain." name='product-amount-remaining' disabled style='display: none;'>Amount remaining: ".$remain." </td>
                              </tr>
                              <tr>
                                  <td><p name='product-description'>Description: </p>".$products["description"]." </td>
                              </tr>
                              ";
                            ?>
                            <tr>
                                <div class="product-amount-to-buy">
                                    <div class="to-buy">
                                        <td>
                                            <h3>Amount to Buy:</h3>
                                            <br>
                                            <div class="input-amount" id="input-amount">
                                                <button type="button" name="button"><i class="fas fa-minus-circle" id="minus" onclick="minus()"></i></button>
                                                <input type="text" value="1" id="count" name="product-amount-to-decrease" style="text-align:center;">
                                                <button type="button" name="button"><i class="fas fa-plus-circle" id="plus" onclick="plus()"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price-total">
                                                <h3>Total Price</h3>
                                                <br>
                                                <p name="product-price-to-pay"> <input name="pay" id="pay" value='<?= $products["price"]; ?>' style="text-align:center;"> </p>
                                            </div>
                                        </td>
                                    </div>
                                </div>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class= "row">
                                        <div class="column">
                                            <br>
                                            <p>
                                                <button type="button" class="btn bl">
                                                    <span class="btn-text">Cancel</span>
                                                </button>
                                                <button type="submit" class="btn br">
                                                    <span class="btn-text">Buy</span>
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
		</div>
        <script src="../js/buy.js"></script>
    </body>
</html>
