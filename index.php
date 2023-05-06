<!-- starting session with php before html -->
<?php session_start(); 

    //retrieve the username from the session variable
    if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == "user"){
        $user_username = $_SESSION['user_username'];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kobieta i Dusza | Joga kundalini Edinburgh | Strona główna</title>
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

        <style>
            

        </style>
    </head>

    <body>

        <!-- ======= Navbar ======= -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img  id="logo" class="logo" src="assets/img/logo.png" alt="Logo Kobieta i Dusza">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav" id="navbarNav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#courses"><h3>Kursy</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#won"><h3>Whispers of nature</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#about"><h3>O mnie</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#yoga"><h3>Kundalini joga</h3></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#contact"><h3>Kontakt</h3></a>
                            </li>
                            <?php
                                // // Check if customer is logged in
                                if (isset($_SESSION['user_login'])) {
                                    echo "<li class='nav-item last-item d-flex'>";
                                    echo "<a class='social-links' href='user-profile.php'><i class='bi bi-person'></i></a>";
                                    echo "<a class='social-links' href='cart.php'><i class='bi bi-basket'></i></a>";
                                    echo "<a class='social-links' href='logout.php'><i class='bi bi-box-arrow-right'></i></a>";
                                    echo "</li>";
                                }
                                // Check if admin is logged in
                                elseif (isset($_SESSION['admin_login'])) {
                                    echo "<li class='nav-item'>";
                                    echo "<a class='btn btn-login' href='admin-logout.php'><h2 class='log-text'>Wyloguj się</h2></a>";
                                    echo "</li>";
                                }
                                // Display login link if no one is logged in
                                else {
                                    echo "<li class='nav-item'>";
                                    echo "<a class='btn btn-login' href='log-reg.php'><h2 class='log-text'>Zaloguj się</h2></a>";
                                    echo "</li>";
                                }
                                
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- End Navbar -->

        <!-- 
        hamburger sie zle klika
        pod hamburgerem linki nie maja hovera
        kolor czcionki - czarny ma byc
        -->

        <main>
            <!-- ======= Hero ======= -->
            <section id="hero" class="hero d-flex align-items-center pb-5">
                <div class="container">
                <div class="row justify-content-between gy-5">
                    <div class="hero-content col-lg-4 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                        <h1 class="hero-title" data-aos="fade-up">Kundalini to joga świadomości i autentyczności</h1>
                        <p class="hero-text" data-aos="fade-up" data-aos-delay="100">Stoisz o krok od harmonii czakr i nowego życia...</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a class="btn btn-lookfor" href="login.php">Sprawdź!</a>
                            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Obejrzyj video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
                        <img src="assets/img/hands.jpeg" class="img-fluid border-img" alt="Dłonie łapiące słońce | kundalini joga edinburgh" data-aos="zoom-out" data-aos-delay="300">
                    </div>
                </div>
                </div>
                <!-- zmien film -->

            </section>
            <!-- End Hero -->


             <!-- ======= Courses ======= -->
             <section id="courses" class="courses">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4">
                        <div class="section-header text-center pb-2">
                            <h5>Kursy</h5>
                            <h4>Wybierz najlepszy kurs dla siebie</h4>
                        </div>
                        <div class="courses-content col-lg-12 col-md-6"> 

                            <!-- Intro Box -->
                            <div class="course-text col-lg-3 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="intro-box border-img">
                                    <h6 class="intro-title">Rozpocznij nowe życie z jogą kundalini</h6>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                    Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                                    </p>
                                </div>
                            </div>
                
                            <div class="courses-desc col-lg-9 col-md-6 d-flex justify-content-center align-items-center">
                                <div class="row gy-4">
                    
                                    <!-- Course 1 Box -->
                                    <div class="course-box-1 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                            <img src="assets/img/yogin_icon_1.png" class="course-icon-1" alt="Jogin" data-aos="zoom-out" data-aos-delay="300">
                                            <h6>Lorem Ipsum</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <a href="shop.php" class="btn btn-join-1">Dołącz!</a>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Course 2 Box -->
                                    <div class="course-box-2 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                            <img src="assets/img/flower_icon_2.png" class="course-icon-2" alt="Jogin" data-aos="zoom-out" data-aos-delay="300">
                                            <h6>Lorem Ipsum</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <a href="shop.php" class="btn btn-join-2">Dołącz!</a>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Course 3 Box -->
                                    <div class="course-box-3 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                                        <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                            <img src="assets/img/yogin_icon_3.png" class="course-icon-3" alt="Jogin" data-aos="zoom-out" data-aos-delay="300">
                                            <h6>Lorem Ipsum</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <a href="shop.php" class="btn btn-join-3">Dołącz!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Courses -->

            
            <!-- ======= Quote ======= -->
            <section id="quote" class="quote fixed-bg" style="opacity: 0.95;">
                <div class="container " data-aos="zoom-out">
                    <div class="row gy-4">
                        <div class="col-lg col-md-6">
                            <div class="quote-item text-center">
                                <h4>„Jeśli doprowadzisz do porządku własne wnętrze, to, co na zewnątrz, samo ułoży się we właściwy sposób.”</h4>
                                <div class="quote-author text-end" style="margin-bottom: 50px; font-style: italic;">
                                    <h6>~ Eckhart Tolle</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Quote -->


            <!-- ======= Products ======= -->
            <section id="won" class="won py-5">
                <div class="container" data-aos="fade-up">
          
                    <div class="section-header text-center py-2">
                        <h5>Whispers of Nature</h5>
                        <h4>Sprawdź moje produkty</h4>
                    </div>
            
                    <div class="row gy-4 pt-5">
            
                        <!-- Product 1 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="product-box">
                                <div class="product-img">
                                    <img src="assets/img/candle1.jpeg" class="img-fluid" alt="Świeca organiczna w szkle | kundalini joga edinburgh">
                                    <div class="buy-now">
                                        <a href="shop.php"><h5>Kup teraz!</h5></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4>Świeca sojowa</h4>
                                    <span>Hartowane szkło recyklingowane</span>
                                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Product 2 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-box">
                                <div class="product-img">
                                    <img src="assets/img/oil1.jpeg" class="img-fluid" alt="Świeca organiczna w słoiku | kundalini joga edinburgh">
                                    <div class="buy-now">
                                        <a href="shop.php"><h5>Kup teraz!</h5></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4>Olejek eteryczny</h4>
                                    <span>Produkt organiczny</span>
                                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                                </div>
                            </div>
                        </div>
            
                        <!-- Product 3 -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="product-box">
                                <div class="product-img">
                                    <img src="assets/img/roler2.jpeg" class="img-fluid" alt="Olejki do aromaterapii, odświeżające | kundalini joga edinburgh">
                                    <div class="buy-now">
                                        <a href="shop.php"><h5>Kup teraz!</h5></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4>Roler aromaterapeutyczny</h4>
                                    <span>Mix olejków stymulujących czakry</span>
                                    <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <a href="shop.php" class="btn btn-check-more">Zobacz więcej!</a>
                    </div>
                </div>
            </section>
            <!-- przy kodowaniu php sprawdzic sesje, jesli uzytkownik nie jest zalogowany - przeniesc go do logowania, jesli jest zalogowany - moze przejsc do sklepu -->
            <!-- End Products Section -->


            <!-- ======= About  ======= -->
            <section id="about" class="about py-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-header text-center py-2">
                        <h5>Agata Galewska</h5>
                        <h4>Jestem nauczycielką jogi w Szkocji</h4>
                    </div>
                    <div class="row about-content">
                        <div class="about-img col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="150">
                            <img class="img-fluid border-img" src="assets/img/about.jpg" alt="Portret Agaty Galewskiej | Kundalini Joga | Yoga Edinburgh">
                        </div>
                        <div class="col-lg-7 d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="about-info">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->
            
            
             <!-- ======= Yoga ======= -->
             <section id="yoga" class="yoga py-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-header text-center pb-2">
                        <h5>Kundalini joga</h5>
                        <h4>Mistyczna droga do harmonii czakr</h4>
                    </div>
                    <div class="row gy-4 pt-4">
                        <div class="yoga-img col-lg-7 col-md-6 position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="course-booking position-absolute">
                                <h6>Weź udział w kursie</h6>
                                <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                    <a href="shop.php" class="btn">Zapisz się!</a>
                                </div>
                            </div>
                        </div>
                        <div class="yoga-img-mobile col-lg-7 col-md-6 position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="course-booking-mobile">
                                <img class="yoga-img-mobile" src="assets/img/pose-view.jpeg">
                                <h6>Weź udział w kursie</h6>
                                <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                    <a href="shop.php" class="btn">Zapisz się!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                            <div class="content ps-0 ps-lg-5">
                                <p>Z korzeniami sięgającymi tysięcy lat wstecz, joga kundalini oferuje nowoczesne korzyści, od łagodzenia bezsenności po zmniejszanie lęku.
                                    Chociaż podejście kundalini może brzmieć mistycznie, niewielka, ale rosnąca grupa badań naukowych odkrywa wymierne korzyści z praktyki.</p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Usprawnienie i uelastycznienie ciała,</li>
                                    <li><i class="bi bi-check2-all"></i> zwiększona odporność i redukcja stresu,</li>
                                    <li><i class="bi bi-check2-all"></i> wewnętrzny spokój i samoakceptacja,</li>
                                    <li><i class="bi bi-check2-all"></i> wiara we własne możliwości,</li>
                                    <li><i class="bi bi-check2-all"></i> poczucie harmonii i jedności ze światem i z innymi ludźmi</li>
                                </ul>
                                <p>Jednym z powodów takich efektów może być emocjonalne uwolnienie, którego ludzie mogą doświadczyć podczas praktyki.Możesz zacząć płakać 
                                    w trakcie ruchu i pomyśleć, że nawet nie wiedziałaś, że te łzy były w tobie. Następuje oczyszczanie energii w ciele.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Yoga -->


            <!-- ======= Contact ======= -->
            <section id="contact" class="contact py-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-header  text-center py-2">
                        <h5>Kontakt</h5>
                        <h4>Masz pytanie? Napisz do mnie!</h4>
                    </div>
                    
                    <!-- Options -->
                    <div class="row gy-4">
                        <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="info-icon bi bi-telephone flex-shrink-0"></i>
                            <div class="info-text">
                                <h3>Zadzwoń</h3>
                                <p>07777 666555</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->
        
                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="info-icon bi bi-envelope flex-shrink-0"></i>
                            <div class="info-text">
                                <h3>Napisz email</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->
                    </div>

                    
            
                    <!-- Contact form -->
                    <form action="contact.php" method="post" class="email-form p-3 p-md-4">
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Twoje imię" required>
                            </div>
                            <div class="col-xl-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Twój adres email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Tytuł" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Treść" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn">Wyślij</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- End Contact Section -->
            <!-- 
            script contact.php sprawdzic i ewentualnie zmienic -->
           
            
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
                <button onclick="topFunction()" id="back-to-top" class="back-to-top d-flex align-items-center justify-content-center">
                    <i class="bi bi-arrow-up-short"></i>
                </button>
            </footer>
            <!-- End Footer -->



        </main>

        <?php 
    }
    else {
        echo "You're not logged in";
    }
        ?>
        <!-- ======= JS ======= -->

            <!-- Back to top -->
            <script>
                // Get the button
                let mybutton = document.getElementById("back-to-top");
                
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {scrollFunction()};
                
                function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
                }
                
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
                }
            </script>







            <!-- ADD JS ANIMATIONS -->








    </body>
</html>