@extends('/layouts.template');
@section('title','Create New Team')
@section('content')
<div class="row">
    <div class="col-5">
        <a href="/admin/project" class="btn btn-warning mr-1 mb-1"><i class="fas fa-chevron-left mr-1"></i>Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="from-actions-multiple">Add new Team</h4>
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

                    <form class="form" action="/admin/team/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group col-12 mb-2">
                                            <label for="eventRegInput1">Name</label>
                                            <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="name" value="{{old('name')}}">
                                            {{ @errors->first('name') }}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12 mb-2">
                                            <label for="eventRegInput2">Description</label>
                                            <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="description" value="{{old('description')}}">
                                            {{@errors->first('description') }}
                                        </div>
                                    </div>

                                    <fieldset class="form-group">
                                        <label for="basicInputFile">With Browse button</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </fieldset>
                                    {{@errors->first('image') }}
                                </div>
                            </div>
                        </div>
                            <div class="form-actions center">
                                <button type="button" class="btn btn-danger mr-1">
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

@endsection