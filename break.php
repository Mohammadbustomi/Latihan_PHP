<?php
// validate_register.php
$name = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');


$errors = [];

if ($name === '') { $errors[] = "silahkan diisi nama yaa."; }
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Email nggak bener ini."; }


if (!empty($errors)) {
    echo "Form tidak valid:<br>";
    foreach ($errors as $e) echo "- $e<br>";
} else {
    echo "Pendaftaran berhasil. Terima kasih, $name!";
    // Di sini bisa lanjut menyimpan ke DB
}
?>
