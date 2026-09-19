<?php
    function luasSegitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        return $alas;
    }

    function keliling_persegi($sisi) {
        return 4 * $sisi;
    }

    $hasil = luasSegitiga(10, 6);
    echo "Luas Segitiga   : " . $hasil . "<br>";
    echo "Keliling Persegi: " . keliling_persegi(5) . "<br>";
?>