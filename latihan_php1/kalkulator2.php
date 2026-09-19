<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalkulator Sederhana</title>
  </head>
  <body>
    <h2>Kalkulator Sederhana</h2>

    <form method="post">
      <label>Angka Pertama:</label><br />
      <input type="number" name="angka1" step="any" required /><br /><br />

      <label>Angka Kedua:</label><br />
      <input type="number" name="angka2" step="any" required /><br /><br />

      <label>Operasi:</label><br />
      <select name="operasi">
        <option value="+">Tambah (+)</option>
        <option value="-">Kurang (-)</option>
        <option value="*">Kali (*)</option>
        <option value="/">Bagi (/)</option>
        </select><br /><br />

      <input type="submit" name="hitung" value="Hitung" />
    </form>

    <?php
    if (isset($_POST['hitung'])) {
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
