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
$usr = query("SELECT * FROM users WHERE id = $id")[0];




//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["edit"])) {

    //cek apakah data berhasil diedit atau tidak
    if (edit($_POST) > 0) {
        echo "
        <script>
        alert('user berhasil diedit');
        document.location.href = 'user.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('user gagal diedit');
        document.location.href = 'user.php';
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
    <title>Edit User</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Edit User</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $usr["id"]; ?>">
            <input type="text" placeholder="Username" name="username" id="username" value="<?= $usr["username"]; ?>">
            <input type="password" placeholder="Password" name="password" id="password" value="<?= $usr["password"]; ?>">
            <button type="submit" name="edit">Edit</button>
        </form>
    </div>
</body>

</html>