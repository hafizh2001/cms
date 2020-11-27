@extends('layouts.master')
@section('content')
    <form action="/tambah/create" method="post">
    <form action="/article/create" method="post"enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="varchar" class="form-control"
        required="required" name="title"></br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control"
        required="required" name="content"></br>
    </div>
    <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" required="required"name="image"></br>
    </div>

    <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
    </form>
 @endsection