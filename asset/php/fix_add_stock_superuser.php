<?php
  include "connection.php";
  $conn = OpenCon();
?>

<html html>
    <head>
        <title>Add</title>
        <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    </head>

    <body>
        <nav class="navtop">
			<div>
                <a href="dashboard.html"><i class="fas fa-home"></i>Home</a>
                <a href="#"><i class="fas fa-plus"></i>Add</a>
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
			<h2>Add Stock</h2>
            <div>
                <div class="content-product">
                    <div class="item">
                        <table>
                            <tr>
                                <div class="product-box">
                                   <!-- value='' -->
                                    <img class="box" src= <?= $products["location"]; ?> alt="image">
                                </div>
                            </tr>
                            <tr>
                                <td><h3 name="product-name"><?= $products["name"]; ?></h3></td>
                            </tr>
                            <tr>
                                <td><p name="product-amount-sold">Amount sold: </p><? echo ".$products["sold"]." ?></td>
                            </tr>
                            <tr>
                                <td><input id="price" value= <? echo ".$products["price"]." ?> name="product-price" disabled style="display: none;">Price: <? echo ".$products["price"]." ?></td>
                            </tr>
                            <tr>
                                <td><input id="remaining" value= <? echo ".$remain." ?> name="product-amount-remaining" disabled style="display: none;">Amount remaining: <? echo ".$remain." ?></td>
                            </tr>
                            <tr>
                                <td><p name="product-description">Description: </p><? echo ".$products["description"]." ?></td>
                            </tr>
                            <tr>
                                <div class="product-amount-to-buy">
                                    <div class="to-buy">
                                        <td>
                                            <h3>Amount to Add:</h3>
                                            <br>
                                            <div class="input-amount" id="input-amount">
                                                <button type="button" name="button"><i class="fas fa-minus-circle" id="minus" onclick="minus()"></i></button>
                                                <input type="text" value="1" id="count" name="product-amount-to-decrease">
                                                <button type="button" name="button"><i class="fas fa-plus-circle" id="plus" onclick="plus()"></i></button>
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
                                            <br>
                                            <br>
                                            <p>
                                                <button type="button" class="btn bl">
                                                    <span class="btn-text">Cancel</span>
                                                </button>
                                                <button type="submit" class="btn br">
                                                    <span class="btn-text">Add</span>
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
        <script src="asset/js/buy.js"></script>
    </body>
</html>
<?php
  include "connection.php";
  $conn = OpenCon();
?>

<html html>
    <head>
        <title>Add</title>
        <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    </head>

    <body>
        <nav class="navtop">
			<div>
                <a href="dashboard.html"><i class="fas fa-home"></i>Home</a>
                <a href="#"><i class="fas fa-plus"></i>Add</a>
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
			<h2>Add Stock</h2>
            <div>
                <div class="content-product">
                    <div class="item">
                        <table>
                            <tr>
                                <div class="product-box">
                                   <!-- value='' -->
                                    <img class="box" src= <?= $products["location"]; ?> alt="image">
                                </div>
                            </tr>
                            <tr>
                                <td><h3 name="product-name"><?= $products["name"]; ?></h3></td>
                            </tr>
                            <tr>
                                <td><p name="product-amount-sold">Amount sold: </p><? echo ".$products["sold"]." ?></td>
                            </tr>
                            <tr>
                                <td><input id="price" value= <? echo ".$products["price"]." ?> name="product-price" disabled style="display: none;">Price: <? echo ".$products["price"]." ?></td>
                            </tr>
                            <tr>
                                <td><input id="remaining" value= <? echo ".$remain." ?> name="product-amount-remaining" disabled style="display: none;">Amount remaining: <? echo ".$remain." ?></td>
                            </tr>
                            <tr>
                                <td><p name="product-description">Description: </p><? echo ".$products["description"]." ?></td>
                            </tr>
                            <tr>
                                <div class="product-amount-to-buy">
                                    <div class="to-buy">
                                        <td>
                                            <h3>Amount to Add:</h3>
                                            <br>
                                            <div class="input-amount" id="input-amount">
                                                <button type="button" name="button"><i class="fas fa-minus-circle" id="minus" onclick="minus()"></i></button>
                                                <input type="text" value="1" id="count" name="product-amount-to-decrease">
                                                <button type="button" name="button"><i class="fas fa-plus-circle" id="plus" onclick="plus()"></i></button>
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
                                            <br>
                                            <br>
                                            <p>
                                                <button type="button" class="btn bl">
                                                    <span class="btn-text">Cancel</span>
                                                </button>
                                                <button type="submit" class="btn br">
                                                    <span class="btn-text">Add</span>
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
        <script src="asset/js/buy.js"></script>
    </body>
</html>
