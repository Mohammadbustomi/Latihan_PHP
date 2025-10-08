<?php
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 80]
];

echo "Nilai Bahasa siswa ke-2: " . $siswa[1][2] . "<br>";

for ($i = 0; $i < 3; $i++) {
    echo $siswa[$i][0] . " - " . $siswa[$i][1] . " - " . $siswa[$i][2] . "<br>";
}
?>
