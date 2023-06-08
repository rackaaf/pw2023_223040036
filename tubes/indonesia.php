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
    <title>Indonesia</title>
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
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link active" href="#">Destination</a>
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
                    <h2 class="lg-title">INDONESIA</h2>
                    <span class="sm-title">know about some places before your travel</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/rajaampat.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Papua Barat, Indonesia.
                            </span>
                            <div>
                                <p class="text">Raja Ampat adalah sebuah kepulauan. Kepulauan ini terkenal dengan keindahan bawah lautnya yang luar biasa, yang menjadikannya salah satu tempat penyelaman terbaik di dunia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/borobudur.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Magelang, Jawa Tengah.
                            </span>
                            <div>
                                <p class="text">Borobudur adalah sebuah candi Buddha. Candi ini dibangun pada abad ke-8 dan terdiri dari sembilan platform, dengan stupa besar di puncaknya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/bromo.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Probolinggo, Jawa Timur.
                            </span>
                            <div>
                                <p class="text">Bromo adalah sebuah gunung berapi, Gunung ini terkenal dengan pemandangan matahari terbitnya yang indah dan menjadi salah satu objek wisata populer di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/kawah ijen.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Banyuwangi, Jawa Timur.
                            </span>
                            <div>
                                <p class="text">Kawah Ijen adalah sebuah kawah gunung berapi, daya tarik utama Kawah Ijen adalah adanya api biru yang terlihat di malam hari, yang dihasilkan oleh gas sulfur yang membakar saat keluar dari kawah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/labuanbajo.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Manggarai Barat, NTT.
                            </span>
                            <div>
                                <p class="text">Labuan Bajo adalah sebuah kota kecil, Kota ini terkenal sebagai gerbang menuju Taman Nasional Komodo dan juga tempat yang menarik untuk menyelam dan menikmati keindahan pantai.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 featured-item pt-3">
                        <img src="img/Destination/Indonesia/prambanan.jpg" alt="" />
                        <div class="featured-item-content ps-4">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Sleman, DIY.
                            </span>
                            <div>
                                <p class="text">Prambanan adalah sebuah kompleks candi Hindu, Candi-candi ini dibangun pada abad ke-9 dan terdiri dari tiga candi utama, yakni Candi Shiva, Candi Vishnu, dan Candi Brahma.</p>
                            </div>
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
                            <a href="#" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Destination</a>
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