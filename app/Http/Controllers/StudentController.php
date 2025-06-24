<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function newStudent(){
        return view('students_registration');
    }

    public function studentPage(){
        return view('students_page');
    }

    public function studentDetails(){
        return view('students_details');
    }

    public function studentEdit(){
        return view('students_edit');
    }

    public function redirect_sr(){
        return redirect()->route('students.registration');
    }

    public function redirect_se(){
        return redirect()->route('students.edit');
    }
    
    public function add(Request $request){
        $post = new Student();
        $post->name = $request->name;
        $post->address = $request->address;
        $post->img_pass = $request->img_pass;
        $post->save();

        return redirect()->route('students.registration');
    }

}
