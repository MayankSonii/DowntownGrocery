<div class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                    <li style="margin-right:20px;"><a class="text-light" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li style="margin-right:20px;"><a class="text-light" href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a class="text-light" href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                <?php
                } else {
                ?>
                    <li style="margin-right:20px;"><a class="text-light" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a class="text-light" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php
                }
                ?>
            </ul>
        </div>

        <a class=" navbar-brand" href="index.php">Downtown Grocery</a>
    </div>

</div>