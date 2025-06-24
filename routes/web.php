<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/login',"UserController@login")->name('login');
Route::get("/register", "UserController@new")->name('users.new.registration');

Route::middleware(['auth'])->group(function () {
    Route::get("/menu", "UserController@menu")->name('users.menu');
    Route::get("/students_registration", "StudentController@newStudent")->name('students.registration');
    Route::get("/students_page", "StudentController@studentPage")->name('students.page');
    Route::get("/students_details", "StudentController@studentDetails")->name('students.details');
    Route::get("/students_edit", "StudentController@studentEdit")->name('students.edit');
    Route::get("/add_grades", "SchoolGradeController@addGrade")->name('add.grades');
    Route::get("/grades_edit", "SchoolGradeController@gradesEdit")->name('grades.edit');
});

Route::post("/add/new_registration","UserController@add")->name('redirect_users.login');
Route::post("/add/students_registration","StudentController@add")->name('redirect_students.registration');

Route::post("/menu", "UserController@menu")->name('users.menu');
Route::post("/students_details", "StudentController@studentDetails")->name('students.details');
  
Route::post("/redirect/students_edit", "StudentController@redirect_se")->name('redirect_students.edit');
Route::post("/redirect/add_grades", "SchoolGradeController@redirect_ag")->name('redirect_add.grades');
Route::post("/redirect/grades_edit", "SchoolGradeController@redirect_ge")->name('redirect_grades.edit');

?>