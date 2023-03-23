<?php

$mahasiswa = [
    [
        "nrp" => "223040036",
        "nama" => "Muhammad Rackha Fauziansyah",
        "email" => "rackha.223040036@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nrp" => "223040071",
        "nama" => "Hedi Sukur",
        "email" => "hedi.223040071@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040057",
        "nama" => "Ivan Bayu Pratama",
        "email" => "Ivan.223040057@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040038",
        "nama" => "Lisvindanu",
        "email" => "lisvindanu.223040038@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040039",
        "nama" => "Miftah Fauzi",
        "email" => "Miftah.223040039@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040042",
        "nama" => "Muhammad Pandu Permana",
        "email" => "pandu.223040042@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040043",
        "nama" => "Muhammad Rafly Alfarizi",
        "email" => "rafly.223040043@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040040",
        "nama" => "Rama Dhaniaji Refin",
        "email" => "rama.223040040@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040046",
        "nama" => "Muhammad Rifki Ramadhani",
        "email" => "rifki.223040046@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],
    [
        "nrp" => "223040037",
        "nama" => "Rizky Abdurrahman",
        "email" => "rizky.223040037@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kemra.jpg"
    ],

]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>