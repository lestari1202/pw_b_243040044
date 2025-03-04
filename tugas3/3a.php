<?php
function hitungLuasLingkaran($r)
{
    $pi = 3.14;
    $luas = $pi * pow($r, 2);
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = " . round($luas) . " cm²<br>";
}

// Function untuk menghitung keliling lingkaran
function hitungKelilingLingkaran($r)
{
    $pi = 3.14;
    $keliling = 2 * $pi * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = " . round($keliling, 1) . " cm<br>";
}

// Menjalankan function dengan nilai jari-jari tertentu
hitungLuasLingkaran(10);
echo "<hr>"; // Membuat garis pemisah
hitungKelilingLingkaran(20);
