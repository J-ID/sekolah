<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kalkulator PHP</title>
  </head>
  <body>
    <h2>Matematika</h2>

    <form method="post">
      <label>Jari-jari :</label>
      <input type="number" name="jari_jari" step="any" required /><br /><br />

      <label>Sisi :</label>
      <input type="number" name="sisi" step="any" required /><br /><br />

        <button type="submit" name="operasi" value="l">L. Lingkaran</button>
        <button type="submit" name="operasi" value="lp">Lp. Kubus</button>
    </form>
    <hr>

    <?php
    if (isset($_POST['operasi'])) {
        $r = $_POST['jari_jari'];
        $s = $_POST['sisi'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case 'l';
                $kuadrat = $r * $r;
                $hasil = $kuadrat * 3.14;
                break;
                
            case 'lp';
                $kuadrat = $s * $s;
                $hasil = $kuadrat * 6;
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
  </body>
</html>
