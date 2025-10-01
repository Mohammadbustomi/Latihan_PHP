<?php
echo "1. Fungsi Menentukan Bilangan Terbesar";

function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;
echo "Bilangan 1 = $bil1 <br>";
echo "Bilangan 2 = $bil2 <br>";
echo "Bilangan Terbesar adalah: " . terbesar($bil1, $bil2);



echo "2. Tanggal dengan fungsi getdate()";
$sekarang = getdate();
echo "Sekarang tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];


echo "3. Tanggal dengan fungsi date('d-F-Y')";
echo "Sekarang tanggal: " . date("d-F-Y");
?>
