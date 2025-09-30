<?php
echo "<h2>PERULANGAN DARI 90 SAMPAI 100 </h2>";

// Metode 1: Menggunakan FOR
echo "<h3>1. Menggunakan FOR</h3>";
for($i=90; $i<=100; $i++) {
    echo $i." ";
    // Membuat baris baru setiap 1 angka agar rapi
    if($i % 1 == 0) {
        echo "<br>";
    }
}

echo "<hr>";
