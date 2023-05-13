<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <div id="content" class="d-flex flex-column align-items-center">


        <!--show table only if there are items added in the cart-->
        <?php
        $sum = 0;
        $id = "";
        $user_id = $_SESSION['user_id'];
        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Add to Cart'";
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
        ?>
            <table class="custom-table">
                <thead>
                    <tr>
                        <th class="bg-success text-light">Item Name</th>
                        <th class="bg-success text-light">Price</th>
                        <th class="bg-success text-light">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $sum += $row["Price"];
                        $id .= $row["id"] . ", ";
                        echo "<tr><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td>
                                    <td>
                                        <a href='cart-remove.php?id={$row['id']}' class='red'><span class='glyphicon glyphicon-remove'></span></a>
                                    </td>
                                </tr>";
                    }
                    $id = rtrim($id, ", ");
                    ?>
                </tbody>
            </table>
            <table class="custom-total">
                <?php echo "<tr>
                        <td>Total</td>
                        <td>&#8377 " . $sum . "</td>
                        <td><a href='indexpay.php?itemsid=" . $id . "' class='btn btn-outline-success' style='font-size:1.8rem;'>Place Order</a></td>
                    </tr>";
                ?>
            </table>
        <?php
        } else {
        ?> <h2 style="margin: 5rem auto;">Cart Empty!</h2>
        <?php
        }
        ?>



    </div>

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>
</body>

</html>