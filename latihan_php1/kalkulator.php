<?php
    $a = 20;
    $b = 6;

    echo "<h3>Operasi Aritmatika: a=$a, b=$b</h3>";
    echo "Penjumlahan   : " . ($a + $b) . "<br>";
    echo "Pengurangan   : " . ($a - $b) . "<br>";
    echo "Perkalian     : " . ($a * $b) . "<br>";
    echo "Pembagian     : " . ($a / $b) . "<br>";
    echo "Modulus       : " . ($a % $b) . "<br>";
    echo "Pangkat       : " . ($a ** 2) . "<br>";

    echo "<h3>Perbandingan:</h3>";
    echo "a == b  : " . ($a == $b ? 'true':'false') . "<br>";
    echo "a >  b  : " . ($a >  $b ? 'true':'false') . "<br>";
    echo "a >= b  : " . ($a >= $b ? 'true':'false') . "<br>";
?>