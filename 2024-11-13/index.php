<?php

    session_start();

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'tokoku';

    $koneksi = mysqli_connect($host, $user, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko ku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.php"><img src="./images/image-1.jpg" alt="" srcset=""></a>
            </div>
            <div class="judul">Toko Ku</div>
            <div class="nav">
                <ul>
                    <a href="?menu=chart"><li>Chart</li></a>
                    <?php
                        if (!isset($_SESSION['email'])){
                            ?>
                                <a href="?menu=register"><li>Register</li></a>
                                <a href="?menu=login"><li>Login</li></a>
                            <?php
                        } else {
                            ?>
                                <li><?= $_SESSION['email']; ?></li>
                                <a href="?menu=logout"><li>Logout</li></a>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
            
                if (isset($_GET['menu'])){
                    $menu = $_GET['menu'];

                    require_once './pages/'.$menu.'.php';
                } else {
                    require_once('./pages/product.php');
                }

            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh evan</p>
        </div>
    </div>
</body>
</html>