<?php
    $x = 1;

    do {
        echo "Nilai x: " . $x . "<br>";
        $x++;
    } while ($x <= 5);

    // Perhatikan: blok di bawah tetap berjalan -1x meski kondisi false dari awal
    $y = 10;
    do {
        echo "Ini tetap tampil sekali! y = " . $y . "<br>";
        $y++;
    } while ($y < 5);
?>