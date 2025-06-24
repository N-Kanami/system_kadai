<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolGrade extends Model
{
    protected $table = 'school_grades';

    protected $fillable = [
        'student_id', 'term', ''
    ];

    protected $attributes = [
        'grade'=>'1',
        'name'=>'none',
        'address'=>'none',
        'img_pass'=>'none',
        'comment'=>'null'
    ];

}
