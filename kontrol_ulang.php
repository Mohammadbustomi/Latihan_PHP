<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat Anda mendapat grade A <br>";}
else { echo "Maaf Anda belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
case 100 :echo "Nilai yang dipilih 100 <br>";
break;
case 90 :echo "Nilai yang dipilih 90 <br>";
break;
} echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) {
echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
echo "Looping While ke : ".$j."<br>";
$j++;
}
?>

<?php
$nilai = 90;

echo "<h2>Contoh Penggunaan Logika Perulangan & Kontrol</h2>";

/* 1. IF ELSE */
echo "<h3>CONTOH IF ELSE</h3>";
if ($nilai >= 80 && $nilai <= 100) {
    echo "Nilai Anda $nilai, Grade A <br>";
} elseif ($nilai >= 61 && $nilai <= 79) {
    echo "Nilai Anda $nilai, Grade B <br>";
} elseif ($nilai >= 51 && $nilai <= 60) {
    echo "Nilai Anda $nilai, Grade C <br>";
} elseif ($nilai >= 41 && $nilai <= 50) {
    echo "Nilai Anda $nilai, Grade D <br>";
} elseif ($nilai >= 0 && $nilai <= 40) {
    echo "Nilai Anda $nilai, Grade E <br>";
} else {
    echo "Nilai tidak valid! <br>";
}

/* 2. SWITCH */
echo "<h3>CONTOH SWITCH</h3>";
switch (true) {
    case ($nilai >= 80 && $nilai <= 100):
        echo "Nilai Anda $nilai, Grade A <br>";
        break;
    case ($nilai >= 61 && $nilai <= 79):
        echo "Nilai Anda $nilai, Grade B <br>";
        break;
    case ($nilai >= 51 && $nilai <= 60):
        echo "Nilai Anda $nilai, Grade C <br>";
        break;
    case ($nilai >= 41 && $nilai <= 50):
        echo "Nilai Anda $nilai, Grade D <br>";
        break;
    case ($nilai >= 0 && $nilai <= 40):
        echo "Nilai Anda $nilai, Grade E <br>";
        break;
    default:
        echo "Nilai tidak valid! <br>";
}

/* 3. FOR */
echo "<h3>CONTOH FOR</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

/* 4. WHILE */
echo "<h3>CONTOH WHILE</h3>";
$j = 1;
while ($j <= 5) {
    echo "Looping WHILE ke : " . $j . "<br>";
    $j++;
}
?>