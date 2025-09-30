```php
<?php
echo "<h2>=== SISTEM KASIR SEDERHANA ===</h2>";

// Daftar harga barang (array)
$barang = [
    "Buku" => 15000,
    "Pensil" => 3000,
    "Penghapus" => 2000,
    "Pulpen" => 5000,
    "Tas" => 120000
];

// Daftar belanjaan (nama barang dan jumlah)
$belanja = [
    ["nama" => "Buku", "jumlah" => 3],
    ["nama" => "Pulpen", "jumlah" => 2],
    ["nama" => "Tas", "jumlah" => 1]
];

$total = 0;

echo "<h3>Daftar Belanja:</h3>";
foreach($belanja as $item){
    $nama = $item["nama"];
    $jumlah = $item["jumlah"];
    $harga = $barang[$nama];
    $subtotal = $harga * $jumlah;

    echo "- $nama ($jumlah x Rp ".number_format($harga,0,",",".").") = Rp ".number_format($subtotal,0,",",".")."<br>";

    $total += $subtotal;
}

// Kontrol: jika total belanja >= 200.000 dapat diskon 10%
if($total >= 200000){
    $diskon = 0.1 * $total;
    $totalBayar = $total - $diskon;
    echo "<p><b>Diskon 10% = Rp ".number_format($diskon,0,",",".")."</b></p>";
} else {
    $totalBayar = $total;
}

echo "<h3>Total Bayar: Rp ".number_format($totalBayar,0,",",".")."</h3>";
?>
```
