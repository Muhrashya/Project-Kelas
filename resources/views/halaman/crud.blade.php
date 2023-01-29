








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   
@extends('layouts.master')
{{-- @extends('layouts.app') --}}
<center>
@section('content')
    {{-- <h1>Categories</h1> --}}
    <button class="btn btn-primary"><a href="/shop/create" style="color: black; justify-content:right" >Tambah Data</a></button>
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Berat Produk</th>
                <th>Deskripsi Produk</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          @foreach ($detail as $dt)
                <tr>
                    <td>{{ $dt->berat_produk }}</td>
                    <td>{{ $dt->deskripsi_produk }}</td>
                    <td>{{ $dt->ranting }}</td>
                    {{-- <td>{{ $category->updated_at }}</td> --}}
                    <td>
                        <a href="">View</a>
                        <a href="/detail/edit/{{ $dt->id }}">Edit</a>
                        <form action="/detail/delete/{{  $dt->id }}" method="POST">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
</center>

@include('sweetalert::alert')
{{-- @section('content') --}}
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>




