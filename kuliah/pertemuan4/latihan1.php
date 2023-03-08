<?php

//mengecek apakah sebuah bilangan itu ganjil atau genap

//jika angka dibagi dua sisanya satu maka ganjil
function cekGanjilGenap($angka) //parameter
{
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan ganjil";
    } else { //selain dari itu
        return "$angka adalah bilangan genap";
    }
}

echo cekGanjilGenap(10); //argumen
echo "<br>";
echo cekGanjilGenap(16);
echo "<br>";
echo cekGanjilGenap(1600);
