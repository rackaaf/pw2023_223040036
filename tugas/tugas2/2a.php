<?php

$a = 1;
$nama_depan = "Muhammad";
$nama_belakang = "Rackha";

for ($a = 1; $a <= 100; $a++) {

    if ($a % 3 == 0 && $a % 5 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    } elseif ($a % 3 == 0) {
        echo "$nama_depan <br>";
    } elseif ($a % 5 == 0) {
        echo  "$nama_belakang<br>";
    } else {
        echo "$a <br>";
    }
}
