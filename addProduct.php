<?php include './Header.php' ?>

<h1>Add Product</h1>
<form method="POST" action="/amisha/addProductHandler.php">
    <div>
        <input type="text" name="img" placeholder="img">
    </div>

    <div>
        <input type="text" name="title" placeholder="title">
    </div>

    <div>
        <input type="text" name="price" placeholder="price">
    </div>
    <div>
        <input type="submit" value="Add Product">
    </div>
</form>
<?php include './Footer.php' ?>