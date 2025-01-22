<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view("student.index",compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.add_student");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "studentName" => "required",
            "address" => "required",
            "phone" => "required|numeric",
            "gender" => "required",
            "country" => "required",
            "province" => "required",
            "birthdate" => "required|date",
            "email" => "required|email",
        ],[
            'studentName.required' => 'Please Enter Name',
        ]);

        Student::create([
            'studentName' => $request->studentName,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'country' => $request->country,
            'province' => $request->province,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Student added successfully!');
        // return response()->json(['message' => 'Student record created successfully.'], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view("student.show_student",compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view("student.edit_student",compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
    $student->update($request->all());
    return redirect()->route('students.index')->with('success', 'Student updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
{
    $student->delete();
    return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
}
}
