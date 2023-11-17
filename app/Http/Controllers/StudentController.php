<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    const PATH_VIEW = 'students.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::query()->create($request->all());
        return back()->with('msg', 'Thao tác thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        Student::query()->update($request->all());
        return back()->with('msg', 'Thao tác thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student successfully deleted');
    }
}
