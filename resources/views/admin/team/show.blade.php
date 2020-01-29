@extends('/layouts.template');
@section('title','Details for '.$team->name)
@section('content')

<div class="card mb-3">
    <img src="{{asset('storage/'.$team->image)}}" class="card-img-top" style="width: 100%; height:300px ;object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{$team->name}}</h5>
        <p class="card-text">{{$team->description}}</p>
        <p class="card-text"><small class="text-muted">{{$team->created_at}}</small></p>
    </div>
</div>
<div class="row">
    <div class="col-5">
        <a href="/admin/team" class="btn btn-warning mr-1 mb-1"><i class="fas fa-chevron-left mr-1"></i>Back</a>
    </div>
</div>

@endsection