<?php
echo "<h2>Contoh Kasus Penggunaan Perulangan dan Kontrol</h2>";

/* 1. Menampilkan angka 1 sampai 20 */
echo "<h3>1. Menampilkan angka 1 sampai 20</h3>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}

/* 2. Menampilkan bilangan genap saja */
echo "<h3>2. Menampilkan bilangan genap (1 - 20)</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

/* 3. Menghentikan perulangan dengan break */
echo "<h3>3. Stop di angka 10 (menggunakan break)</h3>";
for ($i = 1; $i <= 20; $i++) {
    if ($i == 11) {
        break; // hentikan perulangan di angka 10
    }
    echo $i . " ";
}

/* 4. Melewati angka tertentu dengan continue */
echo "<h3>4. Lewati angka 13 (menggunakan continue)</h3>";
for ($i = 10; $i <= 20; $i++) {
    if ($i == 13) {
        continue; // skip angka 13
    }
    echo $i . " ";
}

/* 5. Menampilkan daftar data dari array */
echo "<h3>5. Menampilkan daftar nama siswa (array)</h3>";
$siswa = ["Andi", "Budi", "Citra", "Dewi"];
foreach ($siswa as $nama) {
    echo "- " . $nama . "<br>";
}
?>