<?php
    // Mendefinisikan fungsi
    function sapa() {
        echo "<span style='color: green; font-weight: bold;'>Halo! Selamat datang di SMK TJP Tuban.</span><br>";
    }

    function nama() {
        echo "<span style='color: blue; font-weight: bold;'>Jovan Septian Ramadhan.</span><br>";
    }

    function jurusan() {
        echo "<span style='color: red; font-weight: bold;'>Jurusan :RPL.</span><br>";
    }

    // Memanggil fungsi
    sapa();   // Output: Halo! Selamat datang di SMK TJP Tuban.
    sapa();   // Dapat dipanggil berkali-kali
    nama();
    jurusan();
?>