<?php
function urutanAngka($angka)
{
    $value = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $value . " ";
            $value++;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);
