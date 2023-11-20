@extends('layouts.master')

@section('content')

<div class="card mb-4">
    <a href="{{ route('brands.create') }}" class="btn btn-success ">Create New Product</a>
    <div class="card-header">
        <h3 class="card-title">Brands Table</h3>
    </div><!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
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
    </div><!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-end">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
</div>

@endsection