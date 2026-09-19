<?php
    $hari = "Senin";
    switch ($hari) {
        case "Senin":
            echo "Hari pertama kerja, semangat!";
            break;
        case "Sabtu":
        case "Minggu":
            echo "Hari libur, istirahat!";
            break;
        default:
            echo "Hari biasa, tetap produktif!";
    }
?>