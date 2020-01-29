@extends('/layouts.template');
@section('title','Details for '.$project->name)
@section('content')

<div class="card mb-3">
    <img src="{{asset('storage/'.$project->image)}}" class="card-img-top" style="width: 100%; height:300px ;object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{$project->name}}</h5>
        <p class="card-text">{{$project->description}}</p>
        <p class="card-text"><small class="text-muted">{{$project->created_at}}</small></p>
    </div>
</div>
<div class="row">
    <div class="col-5">
        <a href="/admin/project" class="btn btn-warning mr-1 mb-1"><i class="fas fa-chevron-left mr-1"></i>Back</a>
    </div>
</div>

@endsection