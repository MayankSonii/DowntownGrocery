<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Downtown Grocery</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>
    <!--Header end-->

    <div id="content">
        <!-- Carousel -->
        <?php
        include 'includes/carousel.php';
        ?>
        <!-- Carousel ends -->

        <!--Item categories listing-->
        <div class="d-flex justify-content-around">
            <div class="card custom-card">
                <img src="img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Daily use Food</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="products.php#food" class="btn btn-outline-success">Go somewhere</a>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/10.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Bakery</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="products.php#bakery" class="btn btn-outline-success">Go somewhere</a>
                </div>
            </div>

            <div class="card custom-card">
                <img src="img/13.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Beverages</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="products.php#beverages" class="btn btn-outline-success">Go somewhere</a>
                </div>
            </div>

        </div>
    </div>

    <!--Item categories listing end-->
    </div>

    <!--Footer-->
    <?php
    include 'includes/footer.php';
    ?>
    <!--Footer end-->
</body>

</html>