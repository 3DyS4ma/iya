<?php
require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
</head>
<body>
    <div class="header">
    <h1>ini adalah header</h1>
    <li><a href="?page">home</a></li>
    <?php
    foreach ($pages as $key => $value) {
    ?>
    <li><a href="?page=<?=$value?>"><?=$key?></a></li>
    <?php
    }
    ?>
    </div>
    <div class="content">
    <h1>ini adalah content</h1>
    <?php
    if(isset($_GET["page"])){
        $page=$_GET["page"];
        if ($page == "contact"){
            require_once("pages/contact");
        }
        if ($page == "jurusan"){
            require_once("pages/jurusan");
        }
        if ($page == "sejarah"){
            require_once("pages/sejarah");
        }
        if ($page == "prestasi"){
            require_once("pages/prestasi");
        }
    }else{
    }
    ?>
    </div>
    <div class="footer">
    <h1>ini adalah footer</h1>
    </div>
    
    <?php
    foreach ($gambars as $key) {
    ?>
    <img src="images/<?=$key?>" alt="">
    <?php
    }
    ?>
    
</body>
</html>