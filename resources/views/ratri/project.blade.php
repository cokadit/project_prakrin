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
                @php
                    $i=1;
                @endphp
                @foreach ($project as $p)
                    <div class="swiper-slide swiper-project">
                        <div class="swiper-project__back">
                            <div class="swiper-project__back--{{$i}}">&nbsp;</div>
                        </div>
                        <div class="swiper-project__text">
                            <h4 class="judul judul__break">
                                {{$p->name}}
                            </h4>
                            <p class="paragraph">{{$p->description}}</p>
                        </div>
                        <img src="{{asset('storage/'.$p->image)}}" alt="Project 1" class="swiper-project__photo">
                    </div>
                @php
                    $i++;
                @endphp
                @endforeach

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

</section>