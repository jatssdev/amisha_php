<?php
$img = $_POST['img'];
$title = $_POST['title'];
$price = $_POST['price'];

$conn = mysqli_connect('localhost', 'root', '', 'amisha');

$q = "INSERT INTO products (img,title,price) VALUES ('$img','$title','$price')";
$result = mysqli_query($conn, $q);

if ($result) {
    header('location:/amisha');
}


?>