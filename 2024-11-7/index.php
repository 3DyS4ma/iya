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
            <div class="logo">
                <img src="./images/logo.png" alt="" srcset="">
            </div>
            <div class="sekolah">
                <h2>SMP Negeri 1 Sidoarjo</h2>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="?m=home">Home</a></li>
                    <li><a href="?m=sejarah">Sejarah</a></li>
                    <li><a href="?m=kegiatan">Kegiatan</a></li>
                    <li><a href="?m=jadwal">Jadwal</a></li>
                    <li><a href="?m=galeri">Galeri</a></li>
                    <li><a href="?m=kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php 
                if (isset($_GET['m'])) {
                    $page = $_GET['m'];
                    require_once './pages/'.$page.'.php';
                } else {
                    require_once './pages/home.php';
                }
            ?>
        </div>
        <div class="footer">
            <p>Web ini dibuat oleh: evan</p>
        </div>
    </div>
</body>
</html>