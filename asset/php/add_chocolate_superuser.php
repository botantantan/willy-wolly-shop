<!DOCTYPE html>
    <head>
        <title>Add New Chocolate</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
         <script src="https://kit.fontawesome.com/43978b739a.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navtop">
			<div>
                <a href="dashboard_superuser.php"><i class="fas fa-home"></i>Home</a>
                <a href="add_chocolate_superuser.php"><i class="fas fa-plus"></i>Add</a>
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
            <h2>Add New Chocolate</h2>
            <div class="content-form">
                <form action="addChoco.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label for="product-name">Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" placeholder="Product Name" id="product-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="product-price">Price</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="price" placeholder="Product Price" id="product-price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="product-description">Description</label>
                        </div>
                        <div class="col-75">
                            <textarea name="desc" placeholder="Product Description" id="product-description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="product-image">Image</label>
                        </div>
                        <div class="col-75">
                            <input type="file" name="chocoImg" id="product-image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="product-amount">Amount</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="amount" placeholder="Product Amount" id="product-amount">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
