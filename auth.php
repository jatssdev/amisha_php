<?php
session_start();
if (isset($_SESSION['isAuth'])) {

    $auth = $_SESSION['isAuth'];
    if (!$auth) {
        header('location:/amisha/login.php');
    }

} else {
    header('location:/amisha/login.php');

}

?>