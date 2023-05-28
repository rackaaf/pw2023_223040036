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
$adm = query("SELECT * FROM admins WHERE id = $id")[0];




//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["edit"])) {

    //cek apakah data berhasil diedit atau tidak
    if (edit2($_POST) > 0) {
        echo "
        <script>
        alert('user berhasil diedit');
        document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('user gagal diedit');
        document.location.href = 'admin.php';
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
    <title>Edit Admin</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Edit Admin</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $adm["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $adm["gambar"]; ?>">
            <input type="text" placeholder="Username" name="username" id="username" value="<?= $adm["username"]; ?>">
            <input type="password" placeholder="Password" name="password" id="password" value="<?= $adm["password"]; ?>">
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="edit">Edit</button>
        </form>
    </div>
</body>

</html>