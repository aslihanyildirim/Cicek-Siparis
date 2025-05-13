<?php 
$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "uyelik";

$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);

if (!$baglanti) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
?>
