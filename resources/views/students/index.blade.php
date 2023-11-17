@extends('layouts.master')

@section('content')
<h1>Student</h1>
<a href="{{ route('students.create')}}" class="btn btn-success">Create Student</a>

<table class="table">
    <thead>
        <tr>
            <th>Tên lớp</th>
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Ảnh</th>
            <th>Trạng Thái</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $students as $student )
        <tr>
            <td>{{$student->tenlop}}</td>
            <td>{{$student->masv}}</td>
            <td>{{$student->tensv}}</td>
            <td>{{$student->anh}}</td>
            <td>{{$student->trangthai}}</td>
            <td>
                <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('students.show', $student->id)}}" class="btn btn-primary">Show</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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