<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    echo "Jari-jari = " . $r . " cm <br>";
    echo "Luas Lingkaran = ";
    return 3.14 * $r * $r .  " cm";
}

echo hitungLuasLingkaran(10);

echo "<hr>";


echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    echo "Jari-jari = " . $r . " cm <br>";
    echo "Keliling Lingkaran = ";
    return 3.14 * 2 * $r .  " cm";
}

echo hitungKelilingLingkaran(20);

echo "<hr>";
