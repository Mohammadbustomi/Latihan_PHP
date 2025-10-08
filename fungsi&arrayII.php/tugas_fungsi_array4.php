<?php
$angka = [
    [rand(1,9), rand(1,9), rand(1,9)],
    [rand(1,9), rand(1,9), rand(1,9)],
    [rand(1,9), rand(1,9), rand(1,9)]
];

$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
        $total += $angka[$i][$j];
    }
    echo "<br>";
}

echo "Jumlah total: " . $total;
?>
