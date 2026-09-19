<?php
    $sekolah = "SMK TJP Tuban";     // variabel global

    function tampilSekolah() {
        global $sekolah;            // akses varibel global
        echo "Sekolah: " . $sekolah . "<br>";
    }

    function hitungBonus($gaji) {
        $bonus = $gaji * 0.1;       // $bonus adalah variabel lokal
        return $bonus;
    }

    tampilSekolah();
    echo "Bonus: " . hitungBonus(5000000) . "<br>";
    // echo $bonus;   <-- ERROR! $bonus tidak bisa diakses di luar
?>