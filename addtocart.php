<?php

include './conn.php';
$id = $_GET['id'];

$query = "SELECT * FROM `cart` WHERE `product_id`=$id";
$existing = mysqli_query($conn, $query);





if (mysqli_num_rows($existing) > 0) {
    echo "this product is already exists in your cart";

} else {

    $q = "INSERT INTO cart (product_id,user_id) VALUES ($id,1)";


    $result = mysqli_query($conn, $q);

    if ($result) {
        header('location:/amisha');
    } else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);
    }
}


?>