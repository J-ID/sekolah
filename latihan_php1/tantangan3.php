<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalkulator PHP</title>
  </head>
  <body>
    <h2>Kalkulator Sederhana</h2>

    <form method="post">
      <label>Angka 1:</label>
      <input type="number" name="angka1" step="any" required /><br /><br />

      <label>Angka 2:</label>
      <input type="number" name="angka2" step="any" required /><br /><br />

        <button type="submit" name="operasi" value="+">Tambah</button>
        <button type="submit" name="operasi" value="-">Kurang</button>
        <button type="submit" name="operasi" value="*">Kali</button>
        <button type="submit" name="operasi" value="/">Bagi</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['operasi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case '+';
                $hasil = $angka1 + $angka2;
                break;
            case '-';
                $hasil = $angka1 - $angka2;
                break;
            case '*';
                $hasil = $angka1 * $angka2;
                break;
            case '/';
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                  $hasil = "Error: Tidak bisa membagi dengan nol!";
                }
                break;
            default:
                $hasil = "Operasi tidak valid.";
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
  </body>
</html>
