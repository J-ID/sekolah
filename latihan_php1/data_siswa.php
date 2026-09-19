<?php
    $siswa = [
      ["nama"=>"Andi",   "nilai"=>92, "absen"=>"01"],
      ["nama"=>"Bella",  "nilai"=>78, "absen"=>"02"],
      ["nama"=>"Candra", "nilai"=>85, "absen"=>"03"],
      ["nama"=>"Dewi",   "nilai"=>69, "absen"=>"04"],
      ["nama"=>"Eko",    "nilai"=>95, "absen"=>"05"],
      ["nama"=>"Eka",    "nilai"=>95, "absen"=>"06"],
    ];

    // Fungsi konversi nilai ke predikat
    function getPredikat($nilai) {
        if ($nilai >= 90) return "A";
        elseif ($nilai >= 80) return "B";
        elseif ($nilai >= 70) return "C";
        elseif ($nilai >= 60) return "D";
        else return "E";
    }

    // Fungsi hitung rata-rata
    function rataRata($data) {
        $total = 0;
        foreach ($data as $s) $total += $s["nilai"];
        return $total / count($data);
    }

    // Tampilkan tabel
    echo "<h3>Daftar Nilai Siswa XI RPL</h3>";
    echo "<table border='1' cellpadding='6'>";
    echo "<tr><th>No</th>
          <th>Nama</th>
          <th>Nilai</th>
          <th>Predikat</th>
          </tr>";
    foreach ($siswa as $s) {
        echo "<tr><td>" . $s["absen"] . "</td><td>" . $s ["nama"] . "</td>";
        echo "<td>" . $s["nilai"] . "</td><td>" . getPredikat($s["nilai"]) . "</td></tr>";
    }
    echo "</table>";
    echo "<p><b>Rata-rata kelas: " . rataRata($siswa) . "</b></p>";
?>