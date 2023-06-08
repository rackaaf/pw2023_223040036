<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: loginadmin.php");
    exit;
}

require './functions.php';

$destinasi = query("SELECT * FROM rekomendasi_destinasi");

//tombol search diklik
if (isset($_POST["cari"])) {
    $destinasi = caridestinasi($_POST["keyword"]);
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admin.css" />
    <title>Admin</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase"><i class="fas fa-mountain-sun me-2"></i>Carmen</div>
            <div class="list-group list-group-flush my-3">
                <a href="./dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="./admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-user me-2"></i>Admin</a>
                <a href="./user.php" class="list-group-item list-group-item-action bg-transparent second-text  fw-bold"><i class="fas fa-user me-2"></i>User</a>
                <a href="./destinasi.php" class="list-group-item list-group-item-action bg-transparent second-text  active"><i class="fas fa-plane-departure me-2"></i>Destinasi</a>
                <a href="./printdestinasi.php" target="_blank" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i class="fas fa-print me-2"></i>Print PDF</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4 px-4 justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-5 batas" id="menu-toggle"></i>
                    <a href="tambahdestinasi.php"><button type="button" class="btn btn-light ">Tambah Destinasi</button></a>
                </div>

                <form class="d-flex pencarian" role="search" action="" method="post">
                    <input class="form-control me-2 pe-5" type="text" placeholder="Cari Data Tempat" name="keyword" autocomplete="off" id="keyword" />
                    <button class="btn btn-outline-light" type="submit" name="cari" id="cari">Search</button>
                </form>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3 text-white border-bottom pb-3">Destinasi</h3>
                    <div class="col">
                        <div id="ajx">
                            <table class="table bg-white rounded shadow-sm table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" width="30">id</th>
                                        <th scope="col">Tempat</th>
                                        <th scope="col" width="500">Deskripsi</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <?php $i = 1; ?>
                                        <?php

                                        foreach ($destinasi as $row) :

                                        ?>
                                            <td><?php echo $i; ?> </td>
                                            <td> <?= $row["tempat"]; ?></td>
                                            <td><?= $row["deskripsi"]; ?></td>
                                            <td><img src="img/Destination/Rekomendasi/<?= $row["gambar"]; ?>" width="50" height="50"></td>
                                            <td>
                                                <a href="editdestinasi.php?id=<?= $row["id"]; ?> "><button type="button" class="btn btn-success">Edit</button></a>
                                                <a href="hapusdestinasi.php?id=<?= $row["id"]; ?>" onclick="return confirm('hapus?');"><button type="button" class="btn btn-danger">Hapus</button></a>
                                            </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php
                                        endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="js/destinasi.js"></script>
</body>

</html>