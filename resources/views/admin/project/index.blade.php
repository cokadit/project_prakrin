@extends('/layouts.template')
@section('title','Our projects')
@section('content')
<div class="row">
    <div class="col-5">
        <a href="/admin/project/create" class="btn btn-success mr-1 mb-1">Add Project</a>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project</h4>
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
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Project Name</th>
                                        <th>Description</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="https://images.unsplash.com/photo-1533134486753-c833f0ed4866?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" width="100"></td>
                                        <td>Project Prakrin</td>
                                        <td>Project untuk prakrin di maxsol</td>
                                        <td class="text-center">
                                            <a href="/admin/create" class="btn btn-icon btn-success" title="Detail"><i class="ft-eye"></i></a>
                                            <a href="#" class="btn btn-icon btn-primary" title="Edit"><i class="ft-edit"></i></a>
                                            <button type="submit" class="btn btn-icon btn-danger" title="Delete"><i class="ft-slash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection