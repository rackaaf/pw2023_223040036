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
    if (tambah2($_POST) > 0) {
        echo "
        <script>
        alert('user berhasil ditambahakan');
        document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('user berhasil ditambahakan');
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
    <title>TambahAdmin</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Tambah Admin</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Username Admin" name="username" id="username">
            <input type="password" placeholder="Password" name="password" id="password">
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="tambah">Tambah Admin</button>
        </form>
    </div>
</body>

</html>