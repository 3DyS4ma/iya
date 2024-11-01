<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul</title>
</head>
<body>
    <!-- <img src="images/<?= $gambar?>" alt="">
    <img src="images/<?= $gambars[0]?>" alt="" srcset=""> -->
    <?php
        foreach ($gambars as $a) {
            echo "<img src=\"images/$a\">";
        }
    ?>
</body>
</html>