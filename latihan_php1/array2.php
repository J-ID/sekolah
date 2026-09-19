<?php
    $siswa = [
      "nama"   => "Budi Santoso",
      "kelas"  => "XI RPL",
      "nilai"  => 88,
      "lulus"  => true,
    ];

    // Mengakses dengan kunci
    echo "Nama  : " . $siswa["nama"] . "<br>";
    echo "Kelas : " . $siswa["kelas"] . "<br>";
    echo "Nilai : " . $siswa["nilai"] . "<br>";

    // Iterasi dengan foreach (key => value)
    foreach ($siswa as $kunci => $nilai_data) {
        echo $kunci . " : " . $nilai_data . "<br>";
    }
?>