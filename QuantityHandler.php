<?php
include './conn.php';

$id = $_GET['id'];
$qty = $_GET['qty'];
$msg = null;

if (isset($_GET['type']) && $_GET['type'] == 'inc') {
    $qty++;
    $msg = "quantity increased";

} else {
    if ($qty <= 1) {
        $msg = 'minimum qunantity should be 1';
    } else {
        $qty--;
        $msg = "quantity decreased";
    }
}
$q = "UPDATE cart SET qty='$qty' WHERE id = $id";
$result = mysqli_query($conn, $q);
if ($result) {
    header("location:/amisha/cart.php?msg=$msg");
} else {
    echo 'error';
}

?>