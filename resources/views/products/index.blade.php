@extends('layouts.master')

@section('content')
<h1>Products</h1>
<a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->status }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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