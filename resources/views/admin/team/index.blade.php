@extends('/layouts.template')
@section('title','Our Team')
@section('content')
<div class="row">
    <div class="col-5">
        <a href="/admin/team/create" class="btn btn-success mr-1 mb-1">Add Team</a>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Team</h4>
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
                                        <th>Team Name</th>
                                        <th>Description</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($team as $t)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td><img src="{{ asset('storage/'. $t->image) }}" width="100px" height="100px" style="object-fit: cover;"></td>
                                        <td>{{$t->name}}</td>
                                        <td>{{$t->description}}</td>
                                        <td>
                                            <a href="/admin/team/{{$t->id}}" class="btn btn-icon btn-success mr-1 float-left" title="Detail"><i class="ft-eye"></i></a>
                                            <a href="/admin/team/{{$t->id}}/edit" class="btn btn-icon btn-primary mr-1 float-left" title="Edit"><i class="ft-edit"></i></a>
                                            <form action="/admin/team/{{$t->id}}" method="POST" class="float-left deleteform2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-icon btn-danger delete2" project-name="{{$t->name}}" title="Delete"><i class="ft-slash"></i></button>
                                            </form>
                                        </td>
                                    </tr>  
                                    @php
                                        $i++;
                                    @endphp
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

@section('footer')
    <script>

        $(".delete2").click(function(){
            var project_name = $(this).attr('project-name');
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure want to delete "+project_name+ "?",
                icon: 'warning',
                dangerMode:true,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                $(".deleteform2").submit();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }else{}
            })
        })
    </script>

@endsection