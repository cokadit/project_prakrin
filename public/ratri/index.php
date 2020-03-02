<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Maxsolusindo Jaya</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="swiper/css/swiper.min.css">
</head>
<body>

    <!-- --- awal loader --- -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__circle"></div>
            <div class="loader__circle"></div>
        </div>
    </div>
    <!-- --- akhir loader --- -->

    <!-- --- awal navigation --- -->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item active"><a href="#" class="navigation__link"><span>01</span>home</a></li>
                <li class="navigation__item"><a href="#about" class="navigation__link"><span>02</span>history</a></li>
                <li class="navigation__item"><a href="#service" class="navigation__link"><span>03</span>Services</a></li>
                <li class="navigation__item"><a href="#project" class="navigation__link"><span>04</span>project</a></li>
                <li class="navigation__item"><a href="#team" class="navigation__link"><span>05</span>Team</a></li>
                <li class="navigation__item"><a href="#contact" class="navigation__link"><span>06</span>Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <!-- --- akhir navigation --- -->

    <!-- --- awal-header --- -->
    <header class="header">
        <div class="header__logo-box">
            <img src="img/logo.png" alt="Logo-Maxsol" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary u-margin-bottom-medium">
                <span class="heading-primary--main">pride.</span>
                <span class="heading-primary--sub">creative.</span>
                <span class="heading-primary--main">in every pixel.</span>
            </h1>
            <a href="#" class="btn btn--blue btn--animated">Load more</a>
        </div>
        <div class="header__img-box">
            <img src="img/banner.png" alt="" class="header__img-1">
            <div class="kotak">&nbsp;</div>
        </div>
    </header>
    <!-- --- akhir-header --- -->
    
    <main>

        <!-- --- awal-about --- -->
        <section class="section-about" id="about">

            <div class="row">
                <div class="col-1-of-2">
                    <img src="img/about.png" alt="Photo about" class="gambar__about">
                    <div class="gambar">
                        <img src="img/about1.jpg" alt="Photo 1" class="gambar__photo gambar__photo--p1">
                        <img src="img/about2.jpg" alt="Photo 2" class="gambar__photo gambar__photo--p2">
                        <img src="img/about3.jpg" alt="Photo 3" class="gambar__photo gambar__photo--p3">
                    </div>
                </div>
                
                <div class="col-1-of-2">
                    <div class="description">
                        <div class="u-center-text">
                            <h2 class="heading-secondary">
                                History of company
                            </h2>
                        </div>

                        <h3 class="heading-tertiary u-margin-bottom-medium u-center-text">
                            From Zero to Awesome
                        </h3>
                        <p class="paragraph u-justify-text">
                            Our history begins in 2010 with a foundation as a software developer company. In 2011 the company took a different direction and focus on web and mobile development. Starting out in a tiny house in Bali, Maxsol has evolve into a 23 strong personnels through out the years. We are now serving digital agency across Indonesia and completed over 500 projects over 7 years.
                        </p>
                        <a href="#" class="btn-text">Learn more &rarr;</a>
                    </div>
                </div>
             </div>
            
        </section>
        <!-- --- akhir-about --- -->


        <!-- --- awal-service --- -->
        <section class="section-service" id="service">
            <div class="row">
                <div class="col-1-of-2">
                    <div class="u-center-text">
                        <h3 class="heading-tertiary">
                            What We Do
                        </h3>
                        <h2 class="heading-secondary u-margin-bottom-small">
                            Our core services
                        </h2>
                        <p class="paragraph u-margin-bottom-medium">
                            Are development, creative and management of digital solutions and marketing. Whatever the challenge, we have the attitude, knowledge, experience and dedication to be your digital partner.
                        </p>
                    </div>

                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h5 class="judul u-center-text">
                                Web development
                            </h5>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fab fa-sketch"></i>
                            </div>
                            <h5 class="judul u-center-text">
                                Graphic & ui design
                            </h5>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <h4 class="judul u-center-text">
                                Software development
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-1-of-2">
                    <img src="img/service.png" alt="Photo Service" class="service__photo">
                </div>
            </div>
        </section>
        <!-- --- akhir-service --- -->

        <!-- --- awal-project --- -->
        <section class="section-project" id="project">
            <div class="u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Our projects
                </h2>
                <p class="paragraph u-margin-bottom-small">
                    These are some of our latest portfolio which we are proud to show off.
                </p>
            </div>

            <div class="u-right-text">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--1">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul  judul__break">
                                    Yokke
                                </h4>
                                <p class="paragraph">www.yokke.co.id</p>
                            </div>
                            <img src="img/project1.png" alt="Project 1" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--2">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Gudang garam signature
                                </h4>
                                <p class="paragraph">Concept & Wireframing</p>
                            </div>
                            <img src="img/project2.png" alt="Project 2" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--3">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul  judul__break">
                                    Tokopedia
                                </h4>
                                <p class="paragraph">Hotlist Banners</p>
                            </div>
                            <img src="img/project3.png" alt="Project 3" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--4">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Alphajwc
                                </h4>
                                <p class="paragraph">Internal Dashboard Enhancement</p>
                            </div>
                            <img src="img/project4.png" alt="Project 4" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--5">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Kindairy
                                </h4>
                                <p class="paragraph">www.kindairy.com</p>
                            </div>
                            <img src="img/project5.png" alt="Project 5" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--6">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Bmw indonesia
                                </h4>
                                <p class="paragraph">www.bmw.co.id</p>
                            </div>
                            <img src="img/project6.png" alt="Project 6" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--7">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Jim models
                                </h4>
                                <p class="paragraph">www.jimmodels.com</p>
                            </div>
                            <img src="img/project7.png" alt="Project 7" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--8">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Chatbot
                                </h4>
                                <p class="paragraph">www.masakapahariini.com</p>
                            </div>
                            <img src="img/project8.png" alt="Project 8" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--9">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Petter rabbit
                                </h4>
                                <p class="paragraph">www.caripetterrabbit.com</p>
                            </div>
                            <img src="img/project9.png" alt="Project 9" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--10">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Holland bakery
                                </h4>
                                <p class="paragraph">www.hollandbakery.co.id/shop</p>
                            </div>
                            <img src="img/project10.png" alt="Project 10" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--11">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Emeron lovely
                                </h4>
                                <p class="paragraph">www.emeronlovely.com</p>
                            </div>
                            <img src="img/project11.png" alt="Project 11" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--12">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Sayit withmcd
                                </h4>
                                <p class="paragraph">www.sayitwithmcd.com</p>
                            </div>
                            <img src="img/project12.png" alt="Project 12" class="swiper-project__photo">
                        </div>

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>
        <!-- --- akhir-project --- -->

        <!-- --- awal team --- -->
        <section class="section-team" id="team">
            <div class="team u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Our team
                </h2>
                <p class="paragraph u-margin-bottom-big">
                    Meet our energetics team dedicated to provide the best services you can acquire.
                </p>

                <iframe src="slider.php" frameborder="0" class="team__iframe"></iframe>

            </div>
        </section>
        <!-- --- akhir team --- -->

        <!-- --- awal contact --- -->
        <section class="section-contact" id="contact">
            <div class="u-center-text">
                <h2 class="heading-secondary u-margin-bottom-medium">
                    Contact Us
                </h2>
            </div>
            
            <div class="row">
                <div class="col-1-of-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1544086808703!2d115.19217661435076!3d-8.6768623937656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f71c4f5fb67%3A0x620f6c5f25e3bf33!2sMaxsol!5e0!3m2!1sid!2sid!4v1580802711973!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="iframe"></iframe>
                </div>
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary">
                        Thank you for your interest.
                    </h3>
                    <p class="paragraph">
                        Please fill out the form below.
                    </p>
                    <form action="#" class="form">
                        <div class="form__type-input">
                            <input type="text" name="nama" placeholder="Full Name" class="form__type-input--input" required>
                            <input type="email" name="email" placeholder="Email Address" class="form__type-input--input" required>
                        </div>
                        <textarea name="pesan" id="" rows="10" placeholder="Writing Message" class="form__textarea u-margin-bottom-medium" required></textarea>
                    </form>
                    <button class="btn btn--blue">Send &rarr;</button>
                </div>
            </div>

        </section>
        <!-- --- akhir contact --- -->
    </main>
    
    <!-- --- awal footer --- -->
    <footer class="footer">
        <div class="footer__logo-box">
            <img src="img/logo.png" alt="Full logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-phone"></i></label>
                            <p class="paragraph footer__item--p">+62 821 4468 2010</p>
                        </li>
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-map-marker-alt"></i></label>
                            <p class="paragraph footer__item--p">Jl. Pura Demak VIII No. 08, <br> Tegal Harum, Kec. Denpasar Barat, <br> Kota Denpasar, Bali 80119</p>
                        </li>
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-envelope"></i></label>
                            <p class="paragraph footer__item--p">business@maxsol.id</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
            <div class="footer__navigation">
                    <ul class="footer__list footer__list--2">
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-facebook-f"></i>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-twitter"></i>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-linkedin-in"></i>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- --- akhir footer --- -->

<!-- 
    <div class="row">
        <div class="col-1-of-2">
            col 1 of 2
        </div>
        <div class="col-1-of-2">
            col 1 of 2
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-3">
            col 1 of 3
        </div>
        <div class="col-1-of-3">
            col 1 of 3
        </div>
        <div class="col-1-of-3">
            col 1 of 3
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-2">
            col 1 of 2
        </div>
        <div class="col-1-of-2">
            col 1 of 2
        </div>
    </div> -->
        
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="font-awesome/js/all.min.js"></script>
        <script src="swiper/js/swiper.min.js"></script>
    
    <!-- --- awal-slider --- -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
        });
    </script>
    <!-- --- akhir-slider --- -->

    <!-- --- awal-menu-active --- -->
    <script>
        $(document).on('click', 'ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
    <!-- --- akhir-menu-active --- -->

    <!-- --- awal-loader --- -->
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                $(".preloader").fadeOut();
            }, 4000);
        })
    </script>
    <!-- --- awal-loader --- -->
</body>
</html>