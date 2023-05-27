<?php
require './functions.php';
//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST["tambah"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('user berhasil ditambahakan');
        document.location.href = 'dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('user berhasil ditambahakan');
        document.location.href = 'dashboard.php';
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
    <title>Tambah User</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Tambah User</h1>
        <form action="" method="post">
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="password" placeholder="Password" name="password" id="password">
            <button type="submit" name="tambah">Tambah</button>
        </form>
    </div>
</body>

</html>