@extends('layouts.master')

@section('content')
<h1>Products</h1>
<a href="{{ route('brands.create') }}" class="btn btn-success">Create New Product</a>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Is_show</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $brand)
        <tr>
            <td>{{ $brand->name }}</td>

            <td>
                <a href="{{ route('brands.show', $data->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('brands.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('brands.destroy', $data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection