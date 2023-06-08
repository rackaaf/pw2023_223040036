<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw2023_tubes");


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//user

function tambah($data)
{
    global $conn;

    $username = strtolower(stripslashes(htmlspecialchars($data["username"])));
    $password = htmlspecialchars($data["password"]);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO  users VALUES (null, '$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data["id"];
    $username = strtolower(stripslashes(htmlspecialchars($data["username"])));
    $password = htmlspecialchars($data["password"]);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET
                        username = '$username',
                        password = '$password'
                        WHERE id = $id ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM users WHERE username LIKE '%$keyword%'";

    return query($query);
}

function registrasi($data)
{
    global $conn;


    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //mengatasi string kosong
    if (empty(trim($username))) {
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('username telah tersedia')</script>";
        return false;
    }


    //cek konfirmasi password
    if ($password != $password2) {
        echo "<script>alert('konfirmasi password tidak sesuai')</script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambahkan user baru kedatabase
    mysqli_query($conn, "INSERT INTO users VALUES(null, '$username', '$password')");

    return mysqli_affected_rows($conn);
}


//admin

//menambah data lewat dashboard
function tambah2($data)
{
    global $conn;

    $username = strtolower(htmlspecialchars($data["username"]));
    $password = htmlspecialchars($data["password"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admins VALUES (null, '$username', '$password', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//upload foto
function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar diupload
    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu')
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo  "<script>
        alert('yang anda upload bukan gambar')
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo  "<script>
        alert('ukuran gambar terlalu besar')
        </script>";
        return false;
    }


    //siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . 'admins/' . $namaFileBaru);

    return $namaFileBaru;
}

//edit data
function edit2($data)
{
    global $conn;

    $id = $data["id"];
    $username = strtolower(stripslashes(htmlspecialchars($data["username"])));
    $password = htmlspecialchars($data["password"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    //cek apakah admin memilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE admins SET
                        username = '$username',
                        password = '$password',
                        gambar = '$gambar'
                        WHERE id = $id ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//menghapus data
function hapus2($id)
{
    global $conn;

    $file = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admins WHERE id= $id"));
    unlink('img/' . 'admins/' . $file["gambar"]);

    $hapus = "DELETE FROM admins WHERE id = $id";

    mysqli_query($conn, $hapus);
    return mysqli_affected_rows($conn);
}

//cari
function cari2($keyword)
{
    $query = "SELECT * FROM admins WHERE username LIKE '%$keyword%'";

    return query($query);
}

//daftar
function registrasi2($data)
{
    global $conn;


    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    //mengatasi string kosong
    if (empty(trim($username))) {
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM admins WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('username telah tersedia')</script>";
        return false;
    }


    //cek konfirmasi password
    if ($password != $password2) {
        echo "<script>alert('konfirmasi password tidak sesuai')</script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambahkan user baru kedatabase
    mysqli_query($conn, "INSERT INTO admins VALUES(null, '$username', '$password', '$gambar')");

    return mysqli_affected_rows($conn);
}


//rekomendasi destinasi dashboard

function tambahdestinasi($data)
{
    global $conn;

    $tempat = htmlspecialchars($data["tempat"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    //upload gambar
    $gambar = upload2();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO rekomendasi_destinasi VALUES (null, '$tempat', '$deskripsi', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//upload foto
function upload2()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar diupload
    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu')
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo  "<script>
        alert('yang anda upload bukan gambar')
        </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo  "<script>
        alert('ukuran gambar terlalu besar')
        </script>";
        return false;
    }


    //siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . 'Destination/' . 'Rekomendasi/' . $namaFileBaru);

    return $namaFileBaru;
}

//edit data
function editdestinasi($data)
{
    global $conn;

    $id = $data["id"];
    $tempat = htmlspecialchars($data["tempat"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    //cek apakah admin memilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload2();
    }


    $query = "UPDATE rekomendasi_destinasi SET
                        tempat = '$tempat',
                        deskripsi = '$deskripsi',
                        gambar = '$gambar'
                        WHERE id = $id ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//menghapus data
function hapusdestinasi($id)
{
    global $conn;

    $file = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM rekomendasi_destinasi WHERE id= $id"));
    unlink('img/' . 'Destination/' . 'Rekomendasi' . $file["gambar"]);

    $hapus = "DELETE FROM rekomendasi_destinasi WHERE id = $id";

    mysqli_query($conn, $hapus);
    return mysqli_affected_rows($conn);
}

//cari
function caridestinasi($keyword)
{
    $query = "SELECT * FROM rekomendasi_destinasi WHERE tempat LIKE '%$keyword%'";

    return query($query);
}
