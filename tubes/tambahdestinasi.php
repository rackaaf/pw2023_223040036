<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

require './functions.php';
//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["tambah"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambahdestinasi($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahakan');
        document.location.href = 'destinasi.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahakan');
        document.location.href = 'destinasi.php';
        </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Destinasi</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Tempat" name="tempat" id="tempat">
            <input type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi">
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="tambah">Tambah Destinasi</button>
        </form>
    </div>
</body>

</html>