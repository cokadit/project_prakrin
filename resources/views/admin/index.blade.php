@extends('/layouts.template');



    
@section('content')
    

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!--Product sale & buyers -->
                <div class="row match-height">
                    {{-- project1 --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Project 1</h4>
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
                    {{-- project1 --}}
                    {{-- project2 --}}
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Project 2</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                    {{-- project2 --}}
                </div>
                <!-- Basic Horizontal Timeline -->
                <div class="row match-height">
                    {{-- team1 --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Card</h4>
                            </div>
                            <div class="card-content">
                                <img class="img-fluid" src="admins/asset/app-assets/images/carousel/06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">3 hours ago</span>
                                <span class="float-right">
                                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- team1 --}}
                    {{-- team2 --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Card</h4>
                            </div>
                            <div class="card-content">
                                <img class="img-fluid" src="admins/asset/app-assets/images/carousel/06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">3 hours ago</span>
                                <span class="float-right">
                                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- team2 --}}
                    {{-- team3 --}}
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Card</h4>
                            </div>
                            <div class="card-content">
                                <img class="img-fluid" src="admins/asset/app-assets/images/carousel/06.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                                <span class="float-left">3 hours ago</span>
                                <span class="float-right">
                                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- team3 --}}
                </div>
            </div> {{--  content-body --}}
                <!--/ Basic Horizontal Timeline -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    @endsection

