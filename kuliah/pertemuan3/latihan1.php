<?php
echo "Mulai. <br>";
// 1. inisialisasi / nilai awal
// 2. kondisi / kapan pengulangan nya berhenti
//3. increment / decrement
$nilai_awal = 1; //inisialisasi
while ($nilai_awal <= 20) { //kondisi terminasi
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal = $nilai_awal + 1; //increment
}
echo "Selesai. <br>";


echo "<hr>";


echo "mulai <br>";
for ($nilai_awal = 1; $nilai_awal <= 5; $nilai_awal++) {
    echo "Hello World $nilai_awal x. <br>";
}

echo "selesai. <br>";
