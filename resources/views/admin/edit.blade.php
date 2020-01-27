@extends('/layouts.template')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{-- start project slider --}}
                        <div class="row match-height">
                            <div class="col-12">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            {{-- slider 1 --}}
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Project 1</h4><a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3 primary"></i></a>
                                                        <div class="heading-elements">
                                                            <ul class="list-inline mb-0"></ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div id="products-sales" class="height-300"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end slider1 --}}
                                        </div>
                                        <div class="carousel-item">
                                            {{-- slider 2 --}}
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Project 2</h4><a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                        <div class="heading-elements">
                                                            <ul class="list-inline mb-0">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div id="products-sales" class="height-300"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end slider 2 --}}
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <i class="fas fa-chevron-circle-left" id="btnsliderkiri"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <i class="fas fa-chevron-circle-right" id="btnsliderkanan"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>  
                            </div>
                        </div>
            {{-- end project slider --}}
            {{-- START slider team project --}}
                <div class="slick-wrapper home-insta">
                    <div class="slider card-slider slick-slider">
                        <!-- 1 -->
                        <div class="card-slider-item">
                            <div class="card-content">
                                <img src="https://cdn.shopify.com/s/files/1/2979/3338/files/1.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-tittle">Basic Card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted pb-3">
                                <span class="float-right">
                                    <a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                </span>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="card-slider-item">
                            <div class="card-content">
                                <img src="https://cdn.shopify.com/s/files/1/2979/3338/files/2.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-tittle">Basic Card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted pb-3">
                                <span class="float-right">
                                    <a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                </span>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="card-slider-item">
                            <div class="card-content">
                                <img src="https://cdn.shopify.com/s/files/1/2979/3338/files/3.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-tittle">Basic Card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted pb-3">
                                <span class="float-right">
                                    <a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                </span>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="card-slider-item">
                            <div class="card-content">
                                <img src="https://cdn.shopify.com/s/files/1/2979/3338/files/4.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-tittle">Basic Card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted pb-3">
                                <span class="float-right">
                                    <a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                </span>
                            </div>
                        </div>
                        
                        {{-- 6 --}}
                        <div class="card-slider-item">
                            <div class="card-content">
                                <img src="https://cdn.shopify.com/s/files/1/2979/3338/files/5.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-tittle">Basic Card</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted pb-3">
                                <span class="float-right">
                                    <a href="#"><i class="far fa-edit primary"></i> EDIT</a>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>


            {{-- END --}}
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection