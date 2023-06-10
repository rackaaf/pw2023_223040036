<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Italy</title>
    <link rel="stylesheet" href="css/destination.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="#">Carmen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pe-3" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item pe-5">
                            <a class="nav-link" aria-current="page" href="index.php#home">Home</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link" href="index.php#about">About</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link active" href="index.php#destinasi">Destination</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link link-light">
                                <i class="fas fa-user me-1 link-light"></i><?php if (isset($_SESSION["login2"])) {
                                                                                echo " Halo, " . $_SESSION['username'];
                                                                            } ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <div class="container">
                <div class="title-wrap">
                    <h2 class="lg-title">ITALY</h2>
                    <span class="sm-title">know about some places before your travel</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Italia/colosseum.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Roma, Italy.
                            </span>
                            <div>
                                <p class="text">Colosseum adalah sebuah amfiteater besar, Colosseum dibangun pada abad ke-1 Masehi dan dianggap sebagai salah satu warisan bersejarah terbesar dari zaman Romawi Kuno.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Italia/cinqueterre.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Liguria, Italy.
                            </span>
                            <div>
                                <p class="text">Cinque Terre adalah sebuah kawasan pesisir, Cinque Terre terdiri dari lima desa nelayan kecil yang terletak di tebing-tebing curam di atas laut. Tempat ini dikenal dengan pemandangan indah yang menakjubkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Italia/piazzanavona.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Roma, Italy.
                            </span>
                            <div>
                                <p class="text">Piazza Navona adalah sebuah alun-alun, Alun-alun ini dikenal karena arsitektur baroknya yang indah, dan merupakan salah satu tujuan wisata paling populer di Roma.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Italia/pisa.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Toscana, Italy.
                            </span>
                            <div>
                                <p class="text">Menara Pisa adalah sebuah menara lonceng besar, Menara ini dikenal karena kemiringannya yang terkenal, yang disebabkan oleh kesalahan dalam desain pondasi saat dibangun pada abad ke-12.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Italia/venice.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Veneto, Italy.
                            </span>
                            <div>
                                <p class="text">Venice dikenal sebagai "Kota Air" karena dibangun di atas air dan terdiri dari banyak kanal dan jembatan. Venice memiliki banyak bangunan bersejarah yang indah, Santo Markus dan Palazzo Ducale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-dark text-white py-2 mt-5">
            <div class="container text-center text-md-start">
                <div class="row text-center text-md-start">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="pb-3">Carmen</h5>
                        <p>Kami adalah website yang didedikasikan untuk menginformasikan destinasi yang menakjubkan di seluruh dunia. Kami berkomitmen untuk menyediakan informasi tempat liburan di setiap negara untuk membantu Anda merencanakan liburan impian Anda.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 dekorasi">
                        <h5 class="text-uppercase mb-4">Links</h5>
                        <p>
                            <a href="index.php#home" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="index.php#about" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="index.php#destinasi" class="text-white">Destination</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="pb-3">contact</h5>
                        <p><i class="fas fa-home mr-3"></i> Amsterdam, Cianjur</p>
                        <p><i class="fas fa-envelope mr-3"></i> Carmen@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 8999 9888 989</p>
                    </div>
                </div>
                <br class="mb-4" />
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p style="padding-left: 60px" class="tengah">Copyright &copy; 2023 All rights reserved by: <strong>Carmen</strong></p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-end">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-sm text-white"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-sm text-white"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-sm text-white"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>