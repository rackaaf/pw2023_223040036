<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
    alert('user berhasil dihapus');
    document.location.href = 'user.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('user gagal dihapus');
    document.location.href = 'user.php';
    </script>
    ";
}
