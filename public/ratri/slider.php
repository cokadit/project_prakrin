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

<div class="team__slider">
    <div class="swiper-container">
        <div class="swiper-wrapper" style="margin: 5rem auto;">
            <div class="swiper-slide">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture">
                            <img src="img/team1.jpg" alt="Team 1" class="team__slider--photo">
                        </div>
                    </div>
                    <div class="card__side card__side--back">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Technical Director</p>
                                <p class="card__price-value">Ricky</p>
                            </div>
                            <a href="#" class="btn btn--blue">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture">
                            <img src="img/team2.jpg" alt="Team 2" class="team__slider--photo">
                        </div>
                    </div>
                    <div class="card__side card__side--back">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">coo</p>
                                <p class="card__price-value">Handri</p>
                            </div>
                            <a href="#" class="btn btn--blue">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture">
                            <img src="img/team3.jpg" alt="Team 3" class="team__slider--photo">
                        </div>
                    </div>
                    <div class="card__side card__side--back">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Technical Lead</p>
                                <p class="card__price-value">Arya</p>
                            </div>
                            <a href="#" class="btn btn--blue">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture">
                            <img src="img/team4.jpg" alt="Team 4" class="team__slider--photo">
                        </div>
                    </div>
                    <div class="card__side card__side--back">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Project Director</p>
                                <p class="card__price-value">Ajeng</p>
                            </div>
                            <a href="#" class="btn btn--blue">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<script src="font-awesome/js/all.min.js"></script>
<script src="swiper/js/swiper.min.js"></script>

<script>

var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
      breakpoints: {
        500: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      }
    });

    
</script>
</body>
</html>