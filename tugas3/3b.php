<?php
function urutanAngka($angka)
{
    $num = 1;
    for ($i = 1; $i <= $angka; $i++) { // Loop untuk jumlah baris
        for ($j = 1; $j <= $i; $j++) { // Loop untuk mencetak angka per baris
            echo $num . " ";
            $num++;
        }
        echo "<br>"; // Pindah ke baris berikutnya
    }
}

// Panggil fungsi dengan parameter 5
urutanAngka(5);
