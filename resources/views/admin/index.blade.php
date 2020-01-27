@extends('/layouts.template');



    
@section('content')
    

    <!-- BEGIN: Content-->
    <div class="row">
        <div class="col-xl-6 col-12 ">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-primary bg-darken-2">
                            <i class="icon-camera font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-primary white media-body">
                            <h5>Project</h5>
                            <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 28</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="media align-items-stretch">
                        <div class="p-2 text-center bg-danger bg-darken-2">
                            <i class="icon-user font-large-2 white"></i>
                        </div>
                        <div class="p-2 bg-gradient-x-danger white media-body">
                            <h5>Team</h5>
                            <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>1,238</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--row -->
                
    <!-- END: Content-->

    @endsection

