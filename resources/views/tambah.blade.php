@extends('layouts.master')
@section('content')
    <form action="/tambah/create" method="post">
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
    
    <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
    </form>
 @endsection