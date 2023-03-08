<?php

//array
//variable yang bisa menanmpung banyak nilai



//membuat array

$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');

$bulan = ['januari', 'februari', 'maret'];

$myArray = ['racka', 10, false];

$binatang = ['🐈'];

//mencetak array
var_dump($hari);
print_r($bulan);
var_dump($myArray);


echo "<hr>";


//manipulasi array
//menambah elemen
$bulan[] = 'April';
$bulan[] = 'Mei';
print_r($bulan);

echo "<hr>";
array_push($bulan, 'Juni', 'juli', 'agustus');
print_r($bulan);

echo "<hr>";

//menambah elemen diawal array
array_unshift($binatang, '🐨', '🐴');
print_r($binatang);

//menghapus elemen diakhir
array_pop($hari);
print_r($hari);


echo "<hr>";

//menghapus elemen diawal
array_shift($hari);
print_r($hari);
