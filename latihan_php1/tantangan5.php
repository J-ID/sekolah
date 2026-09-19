<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar nilai</title>
  </head>

  <body>
    <h1>Daftar Nilai Siswa</h1>

    <?php
    $daftar_siswa = [
      [
      "nama"    => "Ani",
      "nilai"   => 90,
      "kelas"   => "XI RPL",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],

      [
      "nama"    => "Budi",
      "nilai"   => 78,
      "kelas"   => "XI RPL",
      "alamat"  => "Tuban",
      "ket"     => "Remedial",
      ],

      [
      "nama"    => "Caca",
      "nilai"   => 85,
      "kelas"   => "XI TKJ",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],

      [
      "nama"    => "Dinda",
      "nilai"   => 95,
      "kelas"   => "XI TKJ",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],
    ];

    echo "<table border='1'>";
    echo "<tr>
              <th>Nama</th>
              <th>Nilai</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Ket</th>
          </tr>";

    foreach ($daftar_siswa as $siswa) {
        echo "<tr>";
        echo "<td>" . $siswa["nama"] . "</td>";
        echo "<td>" . $siswa["nilai"] . "</td>";
        echo "<td>" . $siswa["kelas"] . "</td>";
        echo "<td>" . $siswa["alamat"] . "</td>";
        echo "<td>" . $siswa["ket"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";
    
    echo $daftar_siswa[0]["nama"] . "<br>";
    echo $daftar_siswa[1]["nilai"] . "<br>";
    echo "<br>";

    $daftar_siswa = [
      [
      "no"      => 1,
      "nama"    => "Udin",
      "nilai"   => 85,
      "kelas"   => "XI RPL",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],

      [
      "no"      => 2,
      "nama"    => "Kris",
      "nilai"   => 90,
      "kelas"   => "XI RPL",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],

      [
      "no"      => 3,
      "nama"    => "Tono",
      "nilai"   => 75,
      "kelas"   => "XI TKJ",
      "alamat"  => "Tuban",
      "ket"     => "Remedial",
      ],

      [
      "no"      => 4,
      "nama"    => "Niko",
      "nilai"   => 80,
      "kelas"   => "XI TKJ",
      "alamat"  => "Tuban",
      "ket"     => "Lulus",
      ],
    ];

    echo "<table border='1'>";
    echo "<tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nilai</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Ket</th>
          </tr>";

    foreach ($daftar_siswa as $siswa) {
        echo "<tr>";
        echo "<td>" . $siswa["no"] . "</td>";
        echo "<td>" . $siswa["nama"] . "</td>";
        echo "<td>" . $siswa["nilai"] . "</td>";
        echo "<td>" . $siswa["kelas"] . "</td>";
        echo "<td>" . $siswa["alamat"] . "</td>";
        echo "<td>" . $siswa["ket"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<br>";
    
    echo $daftar_siswa[1]["nama"] . "<br>";
    echo $daftar_siswa[3]["nilai"] . "<br>";
    echo "<br>";
    ?>
  </body>
</html>
