@extends('layouts.master')

@section('content')
<h1>Create a New Product</h1>

@if(\Session::has('msg'))
<div class="alert alert-success">
    {{ \Session::get('msg') }}
</div>
@endif


<form method="POST" action="{{ route('products.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" class="form-control">


    <label for="image">Image:</label>
    <input type="file" name="image" id="image" class="form-control">


    <label for="description">Description:</label>
    <textarea name="description" id="description" class="form-control"></textarea>


    <label for="status" class="mt-3">Status</label>

    <input type="radio" name="status" id="status-1" value="{{ \App\Models\Product::STATUS_DRAFT }}">
    <label for="status-1">{{ \App\Models\Product::STATUS_DRAFT }}</label>
    <input type="radio" name="status" id="status-2" value="{{ \App\Models\Product::STATUS_PUBLIC }}">
    <label for="status-2">{{ \App\Models\Product::STATUS_PUBLIC }}</label>
    <br>
    <br>
    <a href="{{ route('products.index') }}" class="btn btn-warning">Quay lại danh sách</a>
    <button type="submit" class="btn btn-primary">Create Product</button>
</form>
@endsection