<?php
  include "connection.php";
  $conn = OpenCon();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
     <link rel="stylesheet" href="../css/style.css" type="text/css">
     <title></title>
   </head>
   <body>
     <nav class="navtop">
         <div>
             <a href="dashboard.html"><i class="fas fa-home"></i>Home</a>
             <a href="#"><i class="fas fa-plus"></i>Add</a>
             <div class="navtop-middle">
                 <div class="container">
                     <i class="fas fa-search"></i>
                     <form class="search" action="search.php" method="post">
                         <input type="search" id="search" placeholder="Search..." name="search-box">
                     </form>
                 </div>
             </div>
             <div class="navtop-right">
                 <a href="#" onclick="logout();" ><i class="fas fa-sign-out-alt"></i>Logout</a>
             </div>
         </div>
      </nav>

      <?php
        $keyword = $_POST["search-box"];
        $role = $_COOKIE["role"];
        $sql = "
          select * from chocolate where name like '%$keyword%' or description like '%$keyword%'
        ";

        echo " <br><h2>Search Result for $keyword</h2><br>";
        $result = $conn->query($sql);
        $i = 1;
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
          $i++;
        }
        CloseCon($conn);
       ?>
   </body>
 </html>
