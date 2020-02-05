@extends('ratri.layouts.template')

@section('content')
    
<div class="team__slider">
    <div class="swiper-container">
        <div class="swiper-wrapper" style="margin: 5rem auto;">
            @foreach ($team as $t)
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture">
                                <img src="{{('storage/'.$t->image)}}" alt="Team 1" class="team__slider--photo">
                            </div>
                        </div>
                        <div class="card__side card__side--back">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">{{$t->description}}</p>
                                    <p class="card__price-value">{{$t->name}}</p>
                                </div>
                                <a href="#" class="btn btn--blue">View More</a>
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

@endsection

@section('script')
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
@endsection