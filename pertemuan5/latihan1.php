<?php
//array= variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yg berbdea
//pasangan antara key dan value
//key nya adalah inde yg dimulai dari 0
 
//utk membuat array ada cara lama
$hari = array("senin","selasa", "rabu", "dst");
// dan cara baru
$bulan = ["januari","februari","maret"];
$arr1 = [123, "tulisam", false];

//mnenampilkan array bisa dengan :
//vardam() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen dar array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

//menambhakan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum`at";
echo "<br>";
var_dump($hari);
?>