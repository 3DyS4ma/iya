selesaikan perhitungan ini  menggunakan function

<?php
    function kali($a , $b){
        
        $c=$a*$b;
        return $c;
    }
    kali(3,7);
    function tambah($d,$e){

        $f=$d+$e;
        return $f;
    }
    tambah(1,1);
    function kurang($g,$h){

        $i=$g-$h;
        return $i;
    }
    kurang(1,1);
    function bagi($j,$k){

        $l=$j/$k;
        return $l;
    }
    bagi(1,1);

    function modulo($m,$n){

        $o=$m%$n;
        return $o;
    }
    modulo(1,1);

    echo "<br>";

    // 7%5+8*4-9/3
        $seg = modulo(7,5);
        $seg = tambah($seg,kali(8,4));
        $seg = kurang($seg,bagi(9,3));
        echo $seg;

    echo "<br>";

    //5+3*7/4-9%8
        $hasil = tambah(5,kali(3,7));
        $hasil = bagi($hasil,4);
        $hasil = kurang($hasil,9);
        $hasil = modulo($hasil,8);
        echo $hasil;
?>