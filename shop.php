<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kobieta i Dusza | Kundalini joga Edinburgh | Strona główna</title>
        <meta content="Z korzeniami sięgającymi tysięcy lat wstecz, joga kundalini oferuje 
        nowoczesne korzyści, od łagodzenia bezsenności po zmniejszanie lęku." name="description">
        <meta content="kundalini joga Edinburgh" name="keywords">
        <meta name="robots" content="index">

        <meta property="og:title" content="Joga kundalini w Edynburgu">
        <meta property="og:description" content="Zobacz więcej!">
        <meta property="og:image" content="/assets/img/beach.jpeg">

        <!-- Favicon to be added -->

        <!-- End favicon -->

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/8dfa46e6e2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- CSS -->
        <link href="assets/styles/style.css" rel="stylesheet">

    </head>

    <body>

        <!-- ======= Navbar ======= -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img  id="logo" class="logo" src="assets/img/logo.png" alt="Logo Kobieta i Dusza">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuItems">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"></div>
                        <ul class="navbar-nav" id="menuItems">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html"><h3>Główna</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#courses"><h3>Kursy</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#won"><h3>Whispers of nature</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#about"><h3>O mnie</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#yoga"><h3>Kundalini joga</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#contact"><h3>Kontakt</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-login" href="log-reg.html"><h2 class="log-text">Zaloguj się</h2></a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- End Navbar -->

        <main>
            <!-- ======= Shop Courses ======= -->
            <section id="shop-courses" class="shop-courses">

                <div class="col-lg my-5 mx-5">
                    <div class="section-header text-center py-5">
                        <h5>Kursy</h5>
                        <h4>Wybierz najlepszy kurs dla siebie </h4>
                    </div>
                    <div class="row">
                        <div class="courses-book col-lg">
                            <div class="courses-slider col-lg-5 col-md-6">
                                <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carousel-indicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner border-img">
                                        <div class="carousel-item active">
                                            <img src="assets/img/yoga1.jpeg" class="d-block img-fluid" alt="Yoga position">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/yoga2.jpeg" class="d-block img-fluid" alt="Yoga position">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/yoga3.jpeg" class="d-block img-fluid" alt="Yoga position">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-book-form col-lg-6 col-md-6">
                                <form action="order.php" method="post">
                                    <div class='row align-items-center wow fadeIn'>
                                        <div class='courses-label col-md-3'>
                                            <label class='label-name mb-0' for='title'><h5>Wybierz kurs:</h5></label>
                                        </div>
                                        <select name='title' class='col-lg-9 col-md-5 pe-5'>
                                                <option value=''> tytul </option>
                                        </select>
                                    </div>
                                    <br>

                                    <div class='row align-items-center wow fadeIn'>
                                        <div class='courses-label col-md-3'>
                                            <label class='label-name mb-0' for='date'><h5>Data:</h5></label>
                                        </div>
                                        <select name='date' class='col-lg-9 col-md-5 pe-5'>
                                            <option value=''> data</option>
                                        </select>
                                    </div>
                                    <br>

                                    <div class="btn-courses d-flex justify-content-center wow fadeIn">
                                        <label for="GO"></label>
                                        <input class="btn" type="submit" name="go" value="Submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <!-- End CShop Courses -->


            <!-- ======= Shop Products ======= -->
            <section id="shop-products" class="shop-products">
                <div class="py-5">
                    <div class="container p-0">
                        <div class="col-lg my-5 mx-5">
                            <div class="section-header-shop text-center py-5">
                                <h5>Whispers of Nature</h5>
                                <h4>Ręcznie wykonane produkty w duchu lesswaste </h4>
                            </div>
                        </div>
                        <!-- Products-->
                        <div class="row shop-product-box">
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="mb-3 position-relative">
                                        <div class="badge text-white bg-">
                                            <a class="d-block" href="detail.html">
                                            <div class="border-img">
                                                <img class="img-fluid w-100" src="assets/img/candle1.jpeg" alt="..."></a>
                                            </div>
                                            <div class="product-overlay">
                                                <a class="btn btn-sm" href="product.html">Produkt 1</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="mb-3 position-relative">
                                        <div class="badge text-white bg-">
                                            <a class="d-block" href="detail.html">
                                            <div class="border-img">
                                                <img class="img-fluid w-100" src="assets/img/oil1.jpeg" alt="..."></a>
                                            </div>
                                            <div class="product-overlay">
                                                <a class="btn btn-sm" href="product.html">Produkt 2</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-sm-6">
                                <div class="product text-center">
                                    <div class="mb-3 position-relative">
                                        <div class="badge text-white bg-">
                                            <a class="d-block" href="detail.html">
                                            <div class="border-img">
                                                <img class="img-fluid w-100" src="assets/img/roler1.jpeg" alt="..."></a>
                                            </div>
                                            <div class="product-overlay">
                                                <a class="btn btn-sm" href="product.html">Produkt 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Shop Products -->








            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">
                <div class="container">
                    <div class="row gy-4 footer-box">
                        
                        <div class="col-lg-4 col-md-6 footer-links d-flex">
                            <i class="bi bi-envelope icon"></i>
                            <div>
                                <h4>Zapisz się do newslettera</h4>
                                <form action="newsletter.php" method="post" class="newsletter-form p-3 p-md-4">
                                    <div class="newsletter-group">
                                        <div class="col-lg-4 newsletter-item">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Twoje imię" required>
                                        </div>
                                        <div class="col-lg-6 newsletter-item">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Twój adres email" required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn">Wyślij</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links d-flex">
                            <i class="bi bi-shield-check icon"></i>
                            <div>
                                <h4>Opening Hours</h4>
                                <ul class="p-and-c">
                                    <li><a href="#"><h2>Polityka prywatności</h2></a></li>
                                    <li><a href="#"><h2>Regulamin</h2></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links d-flex">
                            <i class="bi bi-cursor icon"></i>
                            <div>
                                <h4>Obseruj mnie </h4>
                                <div class="social-links d-flex">
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                                    <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Kobieta i Dusza</span></strong>. Wszelkie prawa zastrzeżone.
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </main>
        <!-- ======= JS ======= -->


        <!-- ADD JS ANIMATIONS -->
        
    </body>
</html>