<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("index", compact("students"))->with("i");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route("student.index")->with("ThongBao","Thêm sinh viên thành công");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view("edit", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $student )
    {
        $student->update($request->all());
        return redirect()->route("student.index")->with("ThongBao","cap nhat thanh cong");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("student.index")->with("ThongBao","xoa thanh cong");
    }
}
