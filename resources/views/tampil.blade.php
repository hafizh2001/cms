@extends('layouts.master')
@section('content')

<table class="table table-bordered table-striped">
<a href="tambah/add" class="btn btn-primary">Tambah Data</a>
    <thead>
        <tr>
        <th>No</th>
        <th>Judul Film</th>
        
        <th>Tanggal</th>
        <th>Edit</th>
        <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
@foreach($articles  as $a)
        <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->title}}</td>
        >
        <td>{{$a->created_at}}</td>

        <td><a href="tampil/edit/{{ $a->id }}" class="badge badge warning">Edit</a></td>
       <td> <a href="tampil/delete/{{ $a->id }}" class="badge badge danger">Hapus</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection