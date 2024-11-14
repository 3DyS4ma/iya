<?php
    if (isset($_SESSION['email'])) {
        header("location:login.php");
    }
    if (isset($_SESSION['chart'])) {
        echo "<h1>keranjang kosong</h1>";
    }
    if (isset($_GET['hapus'])) {
        $id=$_GET['hapus'];
        unset ($_SESSION['chart']['$id']);
    }
    $isikeranjang= count($_SESSION['chart']);
    if ($isikeranjang == 0){
        header("location:index.php");
    }
    if (isset($_GET['add'])) {
        $id=$_GET['add'];
    }
    
//echo $id;
    $sql= "SELECT * FROM produk WHERE id = $id";
    $hasil= mysqli_query($koneksi, $sql);
    $baris= mysqli_num_rows($hasil);
    echo $row[1];
    echo $row[3];
    $_SESSION['chart']['$id']=['produk' => $row[1], 'harga' => $row[3], 'jumlah' => isset($_SESSION['chart']['id']) ? $_SESSION['chart'][$id]['jumlah']+1 : 1]
?>
 <table>
    <thead>
        <tr>
            <th>no</th>
            <th>produk</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>total</th>
            <th>hapus</th>
        </tr>
    </thead>
    <body>
        <?php
            foreach ($_SESSION['chart'] as $key){
        ?>
        <tr>
            <td><?= $key['no']?></td>
            <td><?= $key['produk']?></td>
            <td><?= $key['harga']?></td>
            <td><?= $key['jumlah'] * $key['harga']?></td>
            <td><a href="?menu=chart&hapus="</td>
        </tr>
        <?php
        }
        ?>
    </body>
 </table>
<div class="chart">
    <h1>chart</h1>
</div>