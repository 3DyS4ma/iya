<?php

    $menu = ["Profil Sekolah", "Kerjasama", "Tour Sekolah", "Konsentrasi Keahlian", "Bidang", "Fitur-fitur", "Administrasi"];
    $menuLC = ["profile", "kerjasama", "tour", "konsentrasi", "bidang", "fitur", "administrasi"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 1 Sidoarjo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="container">
                <div class="head">
                    <div class="logo">
                        <img src="./images/logo.png" alt="" srcset="">
                    </div>
                    <div class="text"><i>"Unggul, Mumpuni, Berkarakter"</i></div>
                </div>
                <div class="nav">
                    <ul>
                        <?php foreach ($menu as $key) {?>
                            <li><a href="?m="><?= $key; ?></a></li>

                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">

        </div>
    </div>
</body>
</html>