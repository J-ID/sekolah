<?php
    // Fungsi dengan parameter
    function sapaUser($nama) {
        echo "Halo, " . $nama . "! Selamat belajar PHP.<br>";
    }

    // Fungsi dengan 2 parameter + nilai default
    function perkenalan($nama, $kelas = "XI RPL") {
        echo "Nama: $nama | Kelas: $kelas <br>";
    }

    sapaUser("Budi");
    perkenalan("Ani");              // kelas pakai nilai default
    perkenalan("Doni", "XI TKJ");   // kelas diisi manual
?>