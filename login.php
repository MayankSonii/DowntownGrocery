<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <div id="content">
        <div class="card custom-login-form">
            <div class="card-body">
                <h2 class="card-title text-center"><i class="glyphicon glyphicon-user">&nbsp</i>LOGIN</h2>
                <div class="card-text">
                    <form class="d-flex flex-column align-items-center" action="login_submit.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control-lg text-center" placeholder="Email" name="e-mail" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-lg text-center" placeholder="Password" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <?php if (array_key_exists('error', $_GET)) {
                                echo $_GET['error'];
                            } ?>
                        </div>

                        <button type="submit" name="submit" class="btn btn-outline-success custom-submit">Login</button>
                    </form>
                    <p class="text-center">Don't have an account? <a href="signup.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>