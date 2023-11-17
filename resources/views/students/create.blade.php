@extends('layouts.master')
@section('content')

@if(\Session::has('msg'))
<div class="alert alert-success">
    {{ \Session::get('msg') }}
</div>
@endif
<h1>Create Student</h1>
<form method="POST" action="{{ route('students.store') }}">

    @csrf
    <label for="tenlop">Tên Lớp</label>
    <input type="text" name="tenlop" id="tenlop" class="form-control">

    <label for="masv">Mã SV</label>
    <input type="text" name="masv" id="masv" class="form-control">

    <label for="ten">Tên </label>
    <input type="text" name="tensv" id="ten" class="form-control">

    <label for="anh">ảnh</label>
    <input type="text" name="anh" id="anh" class="form-control">

    <label for="trangthai">Trạng thái</label>
    <input type="text" name="trangthai" id="trangthai" class="form-control">



    <button type="submit" class="btn btn-primary mt-3">Create</button>
    <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</form>
@endsection