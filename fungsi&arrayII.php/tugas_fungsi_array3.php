<?php
$produk = [
    ["Laptop", "Elektronik", 8500000, 4.8],
    ["Headphone", "Aksesoris", 1250000, 4.6],
    ["Smartphone", "Elektronik", 9500000, 4.9]
];

$tertinggi = $produk[0];
for ($i = 1; $i < 3; $i++) {
    if ($produk[$i][2] > $tertinggi[2]) {
        $tertinggi = $produk[$i];
    }
}

echo "Produk dengan harga tertinggi: " . $tertinggi[0];
?>
