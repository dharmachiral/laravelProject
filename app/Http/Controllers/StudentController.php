<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            "profile" => "nullable|image|mimes:jpeg,png,jpg,gif", // Validation for profile image |max:2048
        ],[
            'studentName.required' => 'Please Enter Name',
        ]);

        $imageName = null;

        // Handle the file upload if the profile image is provided
        if ($request->hasFile('profile')) {
            $imageName = uniqid() . '.' . $request->profile->extension(); // Generate a unique name
            $request->profile->move(public_path('images/students'), $imageName); // Save to the directory
        }

        // Create the student record
        Student::create([
            'studentName' => $request->studentName,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'country' => $request->country,
            'province' => $request->province,
            'birthdate' => $request->birthdate,
            'email' => $request->email,
            'profile' => $imageName, // Save the generated image name
        ]);

        return redirect()->back()->with('success', 'Student added successfully!');
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
    $request->validate([
        "studentName" => "required",
        "address" => "required",
        "phone" => "required|numeric",
        "gender" => "required",
        "country" => "required",
        "province" => "required",
        "birthdate" => "required|date",
        "email" => "required|email",
        // "profile" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
    ]);

    $student = Student::findOrFail($id);
    if ($request->hasFile('profile')) {
        $imageName = uniqid() . '.' . $request->profile->extension();
        $request->profile->move(public_path('images/students'), $imageName);
    }
    else{
        $imageName = $student->profile;
    }
    // Update other fields
    $student->update([
        'studentName' => $request->studentName,
        'address' => $request->address,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'country' => $request->country,
        'province' => $request->province,
        'birthdate' => $request->birthdate,
        'email' => $request->email,
        'profile' =>$imageName,
    ]);
    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
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
