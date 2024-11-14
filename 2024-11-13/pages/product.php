<?php
    $sql= "SELECT * FROM produk";
    echo $sql;
    $hasil= mysqli_query($koneksi, $sql);
    $baris= mysqli_num_rows($hasil);
    echo $baris;
    if ($baris == 0) {
        echo "<h1>Produk kosong</h1>";
    }else{
        while ($row = mysqli_fetch_array($hasil)) {
            // <?php
            //     <div class ="produk">
            //         <h1>Produk</h1>
            //         <div class="detail-produk">
            //         <img src="images/row[5]" alt="">
            //         <h3><?= $row[1]></h3>
            //         <p><?= $row[2]></p>
            //         <p>stokm : kosong</p>
            //         <h3></h3>
            //         <a href= "?menu=cart&add=<?= $row[0]"><button>Beli</button><a/>

            //         </div>  
            //     </div>
            
        }
    }

?>
<div class="product">
    <h1>product</h1>

</div>