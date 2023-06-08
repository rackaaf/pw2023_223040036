<?php
require('functions.php');
$name = 'Home';

//siapkan data students

$students = query("SELECT * FROM mahasiswa");

//cari mahasiswa ketika tombol search diklik
if (isset($_GET['cari'])) {

    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";

    $students = query($query);
}




// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
