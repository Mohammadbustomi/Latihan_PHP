<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Menampung hasil penjumlahan
$C = [];

// Proses penjumlahan dengan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil
echo "<h3>Hasil Penjumlahan Matriks A + B :</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
