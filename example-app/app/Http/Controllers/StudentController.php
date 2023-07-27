<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view('index', ['students' => $students]);
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        $student = new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->mobile = $request->mobile;
        $student->email = $request->email;
        $student->branch = $request->branch;
        $student->address = $request->address;
        $student->hostel = $request->hostel;
        $student->additional_subjects = implode(', ', $request->additional_subjects);
        $student->save();
        return redirect('student')->with('flash_message', 'Student Added!');
    }
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('show')->with('students', $student);
    }
    public function edit(string $id): View
    {
        $student = Student::find($id);
        $student->additional_subjects_array = $student->additional_subjects ? explode(', ', $student->additional_subjects) : [];

        return view('edit')->with('students', $student);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->mobile = $request->mobile;
        $student->email = $request->email;
        $student->branch = $request->branch;
        $student->address = $request->address;
        $student->hostel = $request->hostel;
        $student->additional_subjects = implode(', ', $request->additional_subjects);
        $student->save();
        return redirect('student')->with('flash_message', 'student Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
