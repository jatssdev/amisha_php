<?php include './Header.php' ?>

<div class="wrapper">
    <?php
    include './conn.php';
    $q = "SELECT * FROM products";
    $result = mysqli_query($conn, $q);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="product">
            <div class="img">
                <img src="<?php echo $row['img']; ?>" alt="">
            </div>
            <h2><?php echo $row['title']; ?></h2>
            <h3>₹<?php echo $row['price'] ?></h3>
            <a href="/amisha/addtocart.php?id=<?php echo $row['id'] ?>">Add TO Cart</a>
        </div>
    <?php } ?>
</div>

<?php include './Footer.php' ?>