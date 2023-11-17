@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
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

<form action="{{ route('students.update',$students->id) }}" method="POST">
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
                <strong>Tên Lớp:</strong>
                <input type="text" name="tenlop" value="{{ $students->tenlop }}" class="form-control" placeholder="tên lớp">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mã SV</strong>
                <input class="form-control" style="height:150px" name="masv" placeholder="mã sinh viên">{{ $student->masv }} >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên SV</strong>
                <input class="form-control" style="height:150px" name="tensv" placeholder="mã sinh viên">{{ $student->tensv }} >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ảnh</strong>
                <input class="form-control" style="height:150px" name="anh" placeholder="mã sinh viên">{{ $student->anh }} >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trạng Thái</strong>
                <input class="form-control" style="height:150px" name="trangthai" placeholder="mã sinh viên">{{ $student->trangthai }} >
            </div>
        </div>




        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection