<?php
    include "connection.php";
    $conn = OpenCon();
    $role = $_COOKIE["role"];
    if ($role == 0){
      $dashboard = "dashboard_user.php";
    }else{
      $dashboard = "dashboard_superuser.php";
    }
?>

<!DOCTYPE html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>

    <body>
        <nav class="navtop">
			<div>
                <a href="<?= $dashboard; ?>"><i class="fas fa-home"></i>Home</a>
                <?php
                if ($role==0){
                  echo "<a href='history.php'><i class='fas fa-bars'></i>History</a>";
                }else{
                  echo "<a href='add_chocolate_speruser.php'><i class='fas fa-plus'></i>Add</a>";
                }
                 ?>
                <div class="navtop-middle">
                    <div class="container">
                        <i class="fas fa-search"></i>
                        <form class="search" action="search.php" method="post">
                            <input type="search" id="search" placeholder="Search..." name="search-box">
                        </form>
                    </div>
                </div>
                <div class="navtop-right">
                    <a href="logout.php" onclick="logout();"><i class="fas fa-sign-out-alt"></i>Logout</a>
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
                      if ($role == 0){
                        $refer = "buy_user.php?id=".$row["id"]."";
                      }else{
                        $refer = "add_stock_superuser.php?id=".$row["id"]."";
                      }
                        echo "
                            <li>
                            <div class='product-box'>
                                <p><a href='$refer'><img class='box' src=".$row["location"]." alt=''></a></p>
                                <a href='$refer' class='product-name'>".$row["name"]."</a>
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
