<?php

require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi2($_POST) > 0) {
        echo "<script>alert('user telah ditambahkan!')</script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container" style="margin:80px auto ;">
        <h1>Register</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Username Admin" name="username" id="username">
            <input type="password" placeholder="Password" name="password" id="password">
            <input type="password" placeholder="Ketik Ulang Password" name="password2" id="password2">
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="register">Daftar</button>
        </form>
        <div class="akun">
            Sudah Punya Akun? <a href="./loginadmin.php">Login</a>
        </div>
    </div>
</body>

</html>