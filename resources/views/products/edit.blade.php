@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Error!</strong> <br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    @if(\Session::has('msg'))
    <div class="alert alert-success">
        {{ \Session::get('msg') }}
    </div>
    @endif
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{ $product->title }}" class="form-control" placeholder="title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="description">{{ $product->description }}</textarea>
            </div>
        </div>
        <label for="status" class="mt-3">Status</label>

        <input type="radio" name="status" id="status-1" @if($product->status == \App\Models\Product::STATUS_DRAFT) checked
        @endif

        value="{{ \App\Models\Product::STATUS_DRAFT }}">

        <label for="status-1">{{ \App\Models\Product::STATUS_DRAFT }}</label>

        <input type="radio" name="status" id="status-2" @if($product->status == \App\Models\Product::STATUS_PUBLIC) checked @endif

        value="{{ \App\Models\Product::STATUS_PUBLIC }}">

        <label for="status-2">{{ \App\Models\Product::STATUS_PUBLIC }}</label>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection