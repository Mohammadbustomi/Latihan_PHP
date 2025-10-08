<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

echo "Nama buah pertama: " . $buah[0][0] . "<br>";

$total = 0;
for ($i = 0; $i < 3; $i++) {
    $total += $buah[$i][1] * $buah[$i][2];
}
echo "Total nilai semua buah: " . $total;
?>
