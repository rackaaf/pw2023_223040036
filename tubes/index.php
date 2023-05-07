<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carmen </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/tubes.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Rubik&display=swap" rel="stylesheet" />
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link" href="#About">About</a>
                        </li>
                        <li class="nav-item pe-5">
                            <a class="nav-link" href="#Tour">Destination</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid hero">
            <div class="container text-center posisi">
                <h1 class="pb-2 display-1">Explore The World</h1>
                <h4 class="pb-3 display-6">Lorem ipsum dolor sit.</h4>
                <div class="active">
                    <a class="btn rounded-pill btnone" href="./register.php" role="button">Sign Up</a>
                    <a class="btn rounded-pill btnone btntwo" href="./login.php" role="button">Login</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid service pt-5 pb-5">
            <div class="container text-center">
                <h2 class="display-3 pb-5">About</h2>
                <div class="row pt-4">
                    <div class="col-md-3 col-sm-6 pb-4">
                        <i class="fa-sharp fa-solid fa-mountain-sun fa-3x"></i>
                        <h3 class="pt-3">Mountain</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 pb-4">
                        <i class="fa-solid fa-umbrella-beach fa-3x"></i>
                        <h3 class="pt-3">Beach</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 pb-4">
                        <i class="fa-solid fa-building-columns fa-3x"></i>
                        <h3 class="pt-3">Museum</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 pb-4">
                        <i class="fa-solid fa-tent fa-3x"></i>
                        <h3 class="pt-3">Camping</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1>Destination</h1>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/Destination/Indonesia/Indonesia.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Indonesia</h5>
                        <a href="./indonesia.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/Belanda/Netherlands.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Netherlands</h5>
                        <a href="./netherlands.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/France/france.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">France</h5>
                        <a href="./france.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/Italia/italy.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Italy</h5>
                        <a href="./italy.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/Jepang/japan.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Japan</h5>
                        <a href="./japan.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/Kanada/canada.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Canada</h5>
                        <a href="./canada.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/Destination/Thailand/thailand.jpg" />
                    <div class="layer">
                        <h5 class="card-title posisidua">Thailand</h5>
                        <a href="./thailand.php" class="btn btn-primary posisitiga">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-dark text-white py-2 mt-5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="pb-3">Company Name</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus enim blanditiis quisquam quos accusamus iusto numquam neque obcaecati commodi esse ullam odit nobis laboriosam, illo cumque, nulla est quae vitae!</p>
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
            <div class="row align-items-center ">
                <div class="col-md-7 col-lg-8">
                    <p style="padding-left: 60px;">Copyright &copy; 2023 All rights reserved by: <strong>Carmen</strong></p>
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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 15,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows: true,
            },
            loop: false,
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>