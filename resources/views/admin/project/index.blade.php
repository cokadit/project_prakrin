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
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($project as $p)
                                    <tr>
                                        @for ($i = 1; $i <10; $i++)
                                            <th scope="row">{{$i}}</th>
                                        @endfor
                                        <td><img src="{{ asset('storage/'. $p->image) }}" width="100"></td>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->description}}</td>
                                        <td>
                                            <a href="/admin/create" class="btn btn-icon btn-success mr-1 float-left" title="Detail"><i class="ft-eye"></i></a>
                                            <a href="#" class="btn btn-icon btn-primary mr-1 float-left" title="Edit"><i class="ft-edit"></i></a>
                                            <form action="/admin/project/{{$p->id}}" method="POST" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-danger" title="Delete"><i class="ft-slash"></i></button>
                                            </form>
                                        </td>
                                    </tr>  
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection