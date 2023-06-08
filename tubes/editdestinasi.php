<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

require './functions.php';

//ambil data di url
$id = $_GET["id"];

//query user berdasarkan id
$destinasi = query("SELECT * FROM rekomendasi_destinasi WHERE id = $id")[0];




//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["edit"])) {

    //cek apakah data berhasil diedit atau tidak
    if (editdestinasi($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diedit');
        document.location.href = 'destinasi.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diedit');
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
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Edit Data</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $destinasi["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $destinasi["gambar"]; ?>">
            <input type="text" placeholder="tempat" name="tempat" id="tempat" value="<?= $destinasi["tempat"]; ?>">
            <input type="text" placeholder="Deskripsi" name="deskripsi" id="deskripsi" value="<?= $destinasi["deskripsi"]; ?>">
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="edit">Edit</button>
        </form>
    </div>
</body>

</html>