<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SchoolGrade;

class SchoolGradeController extends Controller
{
    public function addGrade(Request $request){
        return view('students_add_grades');
    }

    public function gradesEdit(){
        return view('grades_edit');
    }

    public function redirect_ag(){
        return redirect()->route('students.add.grades');
    }

    public function redirect_ge(){
        return redirect()->route('grades.edit');
    }

    public function add(Request $request){
        $post = new SchoolGrade();
        $post->name = $request->name;
        $post->address = $request->address;
        $post->img_pass = $request->img_pass;
        $post->save();

        return redirect()->route('students.registration');
    }
}
