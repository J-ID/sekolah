<?php
    $nilai = 82;
    if ($nilai >= 90) {
        echo "Predikat: A (Sangat Baik)";
    } elseif ($nilai >= 80) {
        echo "Predikat: B (Baik)";
    } elseif ($nilai >= 70) {
        echo "Predikat: C (Cukup)";
    } elseif ($nilai >= 60) {
        echo "Predikat: D (Kurang)";
    } else {
        echo "Predikat: E (Sangat Kurang)";
    }
?>