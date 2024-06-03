<?php include './Header.php';

include './conn.php';
?>

<div class="cart">
    <div class="wrapper">


        <?php

        $q = "SELECT products.* 
    FROM products
    JOIN cart ON products.id = cart.product_id";


        $result = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="product">
                <div class="img">
                    <img src="<?php echo $row['img']; ?>" alt="">
                </div>
                <h2><?php echo $row['title']; ?></h2>
                <h3>₹<?php echo $row['price'] ?></h3>
                <a href="/amisha/deletefromcart.php?id=<?php echo $row['id'] ?>">Delete</a>
            </div>

        <?php } ?>
    </div>
</div>

<?php include './Footer.php' ?>