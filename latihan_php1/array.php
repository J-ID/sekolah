<?php
    // Cara 1: Langsung isi
    $buah = ["Apel", "Mangga", "Jeruk", "Semangka"];

    // Cara 2: Menggunakan array() 
    $warna = array("Merah", "Hijau", "Biru");

    // Mengakses elemen (indeks mulai dari 0)
    echo $buah[0] . "<br>";    // Output: Apel
    echo $buah[2] . "<br>";    // Output: Jeruk

    // Menambah elemen baru
    $buah[] = "Anggur";

    // Menghitung jumlah elemen
    echo "Jumlah buah: " . count($buah) . "<br>";

    // Menampilkan semua elemen dengan foreach
    foreach ($buah as $item) {
        echo "- " . $item . "<br>";
    }
?>