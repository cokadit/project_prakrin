@extends('ratri.layouts.template')

@section('content')
    <!-- --- awal-header --- -->
    <header class="header">
        <div class="header__logo-box">
            <img src="{{asset('ratri/img/logo.png')}}" alt="Logo-Maxsol" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary u-margin-bottom-medium">
                <span class="heading-primary--main">pride.</span>
                <span class="heading-primary--main">creative.</span>
                <span class="heading-primary--main">in every pixel.</span>
            </h1>
            <a href="#" class="btn btn--blue btn--animated">Load more</a>
        </div>
        <div class="header__img-box">
            <img src="{{asset('ratri/img/banner.png')}}" alt="" class="header__img-1">
            <div class="kotak">&nbsp;</div>
        </div>
    </header>
    <!-- --- akhir-header --- -->
    
    <main>

        <!-- --- awal-about --- -->
        <section class="section-about">

            <div class="row">
                <div class="col-1-of-2">
                    <img src="{{asset('ratri/img/about.png')}}" alt="Photo about" class="gambar__about">
                    <div class="gambar">
                        <img src="{{asset('ratri/img/about1.jpg')}}" alt="Photo 1" class="gambar__photo gambar__photo--p1">
                        <img src="{{asset('ratri/img/about2.jpg')}}" alt="Photo 2" class="gambar__photo gambar__photo--p2">
                        <img src="{{asset('ratri/img/about3.jpg')}}" alt="Photo 3" class="gambar__photo gambar__photo--p3">
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
        <section class="section-service">
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
                    <img src="{{('ratri/img/service.png')}}" alt="Photo Service" class="service__photo">
                </div>
            </div>
        </section>
        <!-- --- akhir-service --- -->

        <!-- --- awal-project --- -->
            @include('ratri.project')
        <!-- --- akhir-project --- -->

        <!-- --- awal team --- -->
            @include('ratri.team')
        <!-- --- akhir team --- -->

        <!-- --- awal contact --- -->
        <section class="section-contact">
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

    <footer class="footer">
        <div class="footer__logo-box">
            <img src="{{asset('ratri/img/logo.png')}}" alt="Full logo" class="footer__logo">
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
@stop
@section('script')
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
@endsection