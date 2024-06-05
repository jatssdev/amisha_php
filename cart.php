<?php include './Header.php';

include './conn.php';
?>

<div class="cart">
    <div class="wrapper">


        <?php

        $q = "SELECT products.* ,cart.qty,cart.id as cartId
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
                <div>
                    <a
                        href="/amisha/QuantityHandler.php?id=<?php echo $row['cartId'] ?>&qty=<?php echo $row['qty'] ?>&type=inc">INCREASE</a>
                    <span><?php echo $row['qty']; ?></span>
                    <a
                        href="/amisha/QuantityHandler.php?id=<?php echo $row['cartId'] ?>&qty=<?php echo $row['qty'] ?>&t">DECREASE</a>

                </div>
                <a href="/amisha/deletefromcart.php?id=<?php echo $row['id'] ?>">Delete</a>
            </div>

        <?php } ?>
    </div>


</div>
<?php
if (isset($_GET['msg'])) {
    echo $_GET['msg'];
}
?>

<?php include './Footer.php' ?>