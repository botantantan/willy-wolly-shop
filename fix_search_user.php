<?php
    include "connection.php";
    $conn = OpenCon();
?>

<!DOCTYPE html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="asset/css/style.css" type="text/css">
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
                    <a href="#" onclick="logout();"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>    
		</nav>

        <div class="content">
            <div class="content-product">
                <?php
                    $keyword = $_POST["search-box"];
                    $sql = "
                    select * from chocolate where name like '%$keyword%' or description like '%$keyword%'
                    ";
                    $result = $conn->query($sql);
                    echo "<ul>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                            <li>
                            <div class='product-box'>
                                <p><a href='#'><img class='box' src=".$row["location"]." alt=''></a></p>
                                <a href='#' class='product-name'>".$row["name"]."</a>
                                <p class='product-amount'>Amount sold: ".$row["sold"]."</p>
                                <p class='product-price'>Rp".$row["price"]."</p>
                            </div>
                            </li>
                        ";
                        echo "</ul>";
                    }
                    CloseCon($conn);
                ?>
            </div>
        </div>
    </body>
</html>
<script src="asset/js/quit.js"></script>