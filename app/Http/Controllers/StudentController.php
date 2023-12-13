<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function loadStudents(){
        $student_data = Student::all();
        return view('all_students',compact('student_data'));
    }

    public function exportStudent(){
        Excel::store(new StudentExport, 'Student list.xls');
        return Excel::download( new StudentExport, 'Student list.xls');
    }

    public function loadImportForm(){
        return view('import-form');
    }
    public function ImportStudent(Request $request){
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);
        try {
            
            // import
            Excel::import(new StudentImport, request()->file('file'));

            return redirect('/all/student')->with('success','File Imported Successfully');
        } catch (\Exception $e) {
            return redirect('/go/import')->with('fail',$e->getMessage());
            
        }
    }
}
