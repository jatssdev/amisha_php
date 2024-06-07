<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 20px;
        }

        .wrapper img {
            width: 100%;
        }

        .wrapper .product {
            padding: 20px;
            box-shadow: 0 3px 10px gray;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>Amisha's Store</h1>
        <div class="links">
            <p><a href="/amisha">Home</a></p>
            <p><a href="/amisha/addProduct.php">Add Product</a></p>
            <p><a href="/amisha/cart.php">Cart</a></p>
            <p><a href="/amisha/login.php">Login</a></p>
        </div>
    </div>