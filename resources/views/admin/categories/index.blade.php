@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <button class="btn btn-primary"><a href="/categories/create" style="color: black">Tambah Data</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="">View</a>
                        <a href="/categories/edit/{{ $category->id }}">Edit</a>
                        <form action="/categories/delete/{{  $category->id }}" method="POST">
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