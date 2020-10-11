@extends('layouts.master')
@section('content')
<div class="col-md-8">

<h1 class="my-4">Sinopsis
</h1>

<!-- Blog Post -->
@foreach($articles as $a)
<div class="card mb-4">
   
  <img class="card-img-top" src="{{URL::asset($a->image)}}" alt="">
  <div class="card-body">
    <h2 class="card-title">{{$a->title}}</h2>
    <p class="card-text">{{$a->content}}</p>
    
  </div>
  <div class="card-footer text-muted">
    {{$a->created_at}}
    <a href="#">Start Bootstrap</a>
  </div>
</div>
@endforeach

@endsection