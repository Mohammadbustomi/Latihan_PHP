<?php
$mahasiswa = ["Andi", "tomi", "Budi", "Citra"];

foreach ($mahasiswa as $m) {
    if ($m == "Rivatul") {
        echo "Mahasiswa ditemukan: $m";
        break; // berhenti setelah ketemu
    }
    echo "Memeriksa: $m <br>";
}
?>