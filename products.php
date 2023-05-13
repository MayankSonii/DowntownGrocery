<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="d-flex flex-column" id="content">
    <h2 style="margin-left:20px;"><i>Daily use Food</i><h2>
        <section id="food" class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="card custom-card">
                <img src="img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Soup </h3>
                    <p>Price: Rs. 360 </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(1)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=1" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Rice </h3>
                    <p>Price: Rs. 220 </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(2)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=2" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Oatmeal</h3>
                    <p>Price: Rs. 190</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(3)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=3" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Processed Cheese</h3>
                    <p>Price: Rs. 100</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(4)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=4" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <h2 style="margin-left:20px;"><i>Bakery</i><h2>
        <section id="bakery" class="d-flex justify-content-around align-items-center flex-wrap">

            <div class="card custom-card">
                <img src="img/18.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Black Forest Pastry </h3>
                    <p>Price: Rs. 299 for 3 pcs </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(5)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=5" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/19.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Oreo Chocolate Muffin </h3>
                    <p>Price: Rs. 299 for 250g </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(6)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=4" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/20.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Psalm Donut </h3>
                    <p>Price: Rs. 299 for 500g </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(7)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=7" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/21.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Mcvities Digestive Biscuits </h3>
                    <p>Price: Rs. 20 </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(8)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=4" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <h2 style="margin-left:20px;"><i>Beverages</i><h2>
        <section id="beverages" class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="card custom-card">
                <img src="img/22.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Coke Zero </h3>
                    <p>Price: Rs. 40 for 300ml </p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(9)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=4" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/23.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Tropicana Mixed Fruit Juice</h3>
                    <p>Price: Rs. 100 for 1L</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(10)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=10" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/24.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Rage Coffee</h3>
                    <p>Price: Rs. 290</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(11)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=11" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/25.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>Red Label Tea</h3>
                    <p>Price Rs. 130 for 250g</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-success">Buy Now</a></p>
                        <?php
                    } else {
                        //We have created a function to check whether this particular product is added to cart or not.
                        if (check_if_added_to_cart(12)) {
                            //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="cart-add.php?id=12" class="btn btn-success" >Added to cart</a>';
                        } else {
                        ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-outline-success">Add to cart</a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

        </section>

    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html>