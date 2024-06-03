<?php

include './conn.php';
$id = $_GET['id'];

$query = "DELETE FROM cart WHERE product_id = $id";


$result = mysqli_query($conn, $query);



if ($result) {
    header('location:/amisha/cart.php');


} else {

    echo "Error: " . $q . "<br>" . mysqli_error($conn);

}


?>