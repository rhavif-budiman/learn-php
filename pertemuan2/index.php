<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Rhavif Budiman";
print "Rhavif Budiman";
print_r("Rhavif Budiman");
var_dump("Rhavif Budiman");


echo 123;
echo true;
echo false;

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Rhavif";
echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// penggabung string / concatenation / concat
// .
$nama_depan = "Rhavif";
$nama_belakang = "Budiman";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
$nama = "Rhavif";
$nama .= " ";
$nama .= "Budiman";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
var_dump(1 > 5);
var_dump(1 == "1");

// Identitas
// ===, !==
var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, Selamat Datang ini uji coba git dulu dan branch
        <?php echo $nama; ?>
    </h1>
    <p>
        <?php echo "Ini adalah paragraf"; ?>
    </p>

</body>

</html>