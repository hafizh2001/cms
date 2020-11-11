@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:80px">
    <form action="/edit/update/{{$articles->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$articles->id}}"></br>
<div class="form-group">
    <label for="title">Judul</label>
<input type="text" class="form-control" required="required" name="title" value="{{$articles->title}}"></br>
</div>
<div class="form-group">
<label for="content">Content</label>
<input type="text" class="form-control" required="required" name="excerpt" value="{{$articles->content}}"></br>
</div>
<div class="form-group">
<label for="image">image</label>
<input type="text" class="form-control" required="required" name="body" value="{{$articles->image}}"></br>
</div>
<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>
</div>

 @endsection