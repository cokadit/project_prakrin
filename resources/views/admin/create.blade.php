@extends('/layouts.template')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{-- START FORM :tambah project --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-multiple">Add new Project</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput1">Name</label>
                                                        <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput2">Title</label>
                                                        <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput3">Company</label>
                                                        <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput4">Email</label>
                                                        <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput5">Contact Number</label>
                                                        <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-actions center">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END FORM --}}

            {{-- START FORM :tambah team --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="from-actions-multiple">Add new Team Member</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form">
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput1">Name</label>
                                                        <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput2">Title</label>
                                                        <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput3">Company</label>
                                                        <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput4">Email</label>
                                                        <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="eventRegInput5">Contact Number</label>
                                                        <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label>Existing Customer</label>
                                                        <div class="input-group">
                                                            <div class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                            <div class="d-inline-block custom-control custom-radio">
                                                                <input type="radio" name="customer1" class="custom-control-input" id="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-actions center">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END FORM --}}
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection