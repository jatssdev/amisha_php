<?php
include './conn.php';
session_start();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $q);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['isAuth'] = true;
        header('Location: dashboard.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>