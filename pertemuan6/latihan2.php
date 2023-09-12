<?php 
// $mahasiswa = [
//  ["Kayla Aditya", "0403050023", "kaylaaditya@gnail.com", "Rekayasa Perangkat Lunak"],
//  ["Jenira Sekar", "0403050023", "jenirasekar@gnail.com", "Rekayasa Perangkat Lunak"],
// ];

//Array associative
//key-nya adalah string yang kita buat sendiri
//definisinya sama seperti array numerik, kecuali

$mahasiswa = [
    [
    "nama" => "Kayla Aditya",
    "nrp" => "0403050023",
    "email" => "kaylaaditya@gmail.com",
    "jurusan" => "MULTIMEDIA",
    "gambar" => "jpg"
    ],
    [
        "nama" => "Rina Agustisya",
        "nrp" => "0403050555",
        "email" => "rinaaa@gmail.com",
        "jurusan" => "MULTIMEDIA",
        "gambar" => "jpg"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
   <h1>Data Mahasiswa</h1>

   <?php foreach($mahasiswa as $mhs ) : ?>
   
   <ul>
    <li>
        <img src="img/jpg">
    </li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li>NRP :<?= $mhs["nrp"]; ?></li>
    <li>Email:<?= $mhs["email"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
   </ul>
   <?php endforeach; ?>

   
</body>
</html>