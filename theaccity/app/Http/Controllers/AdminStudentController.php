<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends GlobalController
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')->get();
        return view('admin.students.index', compact('students'))
                ->with('globalinfo', $this->globalinfo());
    }

    public function updateComment(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->comment = $request->comment;
        $student->save();
        
        return redirect()->back()->with('success', 'Student comment updated successfully.');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Student deleted successfully.');
    }
}
