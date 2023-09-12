<?php
// variabel scope/ lingkup variabel
// $x = 10;
// // echo $x;
// function tampilx() {
//     // $x = 20;
//     global $x;
//     echo $x;
// }
// tampilx();
// echo "<br>";
// echo $x;

// superglobals
// variabel global milik php
// merupakan Array Association
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Kelladitya";
// var_dump(($_GET));

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs ["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
     <?php endforeach; ?>
        </ul>
        
</body>
</html>