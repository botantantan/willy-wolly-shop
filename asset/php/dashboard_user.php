
<?php
  include "connection.php";
  $conn = OpenCon();
 ?>

 <html>
     <head>
         <title>Dashboard</title>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
         <link rel="stylesheet" href="../css/style.css" type="text/css">
     </head>

     <body>
         <nav class="navtop">
 			       <div>
                 <a href="dashboard_user.php"><i class="fas fa-home"></i>Home</a>
                 <a href="history.php"><i class="fas fa-bars"></i>History</a>
                 <div class="navtop-middle">
                     <div class="container">
                         <i class="fas fa-search"></i>
                         <form class="search" action="search.php" method="post">
                             <input type="search" id="search" placeholder="Search..." name="search-box">
                         </form>
                     </div>
                 </div>
                 <div class="navtop-right">
                     <a href="logout.php" ><i class="fas fa-sign-out-alt"></i>Logout</a>
                 </div>
             </div>
           </nav>
           <?php
             $id_user = $_COOKIE["id"];
            //  $id_user = 1;
             $sqlNama = "SELECT * from accounts where id = $id_user";
             $hasilNama = ($conn -> query($sqlNama))->fetch_assoc();

             $sqlProducts =
             "
             select *
             from chocolate
             order by sold desc
             limit 10
             ";
             $hasilProducts = $conn -> query($sqlProducts);
            ?>
            <div class="content">
             <div class="content-top">
                 <p>
                 Hello, <?= $hasilNama["username"]; ?>
                 <a href="#">View all chocolate</a>
                 </p>
             </div>

             <h2>Featured Products</h2>
             <div class="content-product">
               <?php
               $i = 1;
               while($row = mysqli_fetch_assoc($hasilProducts)){
                 if (($i==1)||($i==6)){
                   echo "<div class='item'>";
                 }
                 echo "
                 <div class='product-box'>
                     <p><a href='buy_user.php?id=".$row["id"]."'><img class='box' src=".$row["location"]." alt=''></a></p>
                     <a href='buy_user.php?id=".$row["id"]."' class='product-name'>".$row["name"]."</a>
                     <p class='product-amount'>Amount sold: ".$row["sold"]."</p>
                     <p class='product-price'>Rp".$row["price"]."</p>
                 </div>
                 ";
                 if (($i==5)){
                   echo "</div>";
                 }
                   $i++;
                }
                if ($i!=5){
                  echo "</div>";
                }
                ?>
             </div>
         </div>
     </body>
 </html>
 <script src="asset/js/quit.js"> </script>
