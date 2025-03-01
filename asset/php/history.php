<?php
    include "connection.php";
    $conn = OpenCon();
 ?>

<!DOCTYPE html>
    <head>
        <title>History</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
         <script src="https://kit.fontawesome.com/43978b739a.js" crossorigin="anonymous"></script>
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
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </div>
		</nav>

        <div class="content">
            <h2>Transaction History</h2>
            <div>
                <table id="transaction">
                    <tr>
                        <th>Chocolate Name</th>
                        <th>Amount</th>
                        <th>Total Price</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Address</th>
                    </tr>

                    <?php
                    $idPelanggan = $_COOKIE["id"];
                    // $idPelanggan = 10;
                    $hasil  = $conn->query("select * from pembelian where idPembeli = $idPelanggan");
                        while ($row = mysqli_fetch_assoc($hasil)) {
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
        </div>
    </body>
</html>
