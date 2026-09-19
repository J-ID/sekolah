<?php
    $nama   = "Jovan";      // tipe: string
    $usia   = 17;           // tipe: integer
    $tinggi = 165.5;        // tipe: float
    $aktif  = true;         // tipe: boolean

    echo "Nama   : " . $nama . "<br>";
    echo "Usia   : " . $usia . " tahun<br>";
    echo "Tinggi : " . $tinggi . " cm<br>";
    echo "Status : " . ($aktif ? 'Aktif' : 'Tidak Aktif') . "<br>";

    //Cek tipe data
    echo "<br><b> Tipe Data:</b><br>";
    echo "nama   -> " . gettype($nama)   . "<br>";
    echo "usia   -> " . gettype($usia)   . "<br>";
    echo "tinggi -> " . gettype($tinggi) . "<br>";
    echo "aktif  -> " . gettype($aktif)  . "<br>";
?>