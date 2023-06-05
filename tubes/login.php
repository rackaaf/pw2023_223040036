<?php
session_start();

if (isset($_SESSION["login2"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login2"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username 
    if (mysqli_num_rows($result) === 1) {

        //cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login2"] = true;
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/registerlogin.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) : ?>
            <p style="	background-color: #f2dede;
	color: #a94442;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;">Username / Password Salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="login2">Login</button>
        </form>
        <div class="akun">
            Belum Punya Akun? <a href="./register.php">Daftar</a>
        </div>
    </div>
</body>

</html>