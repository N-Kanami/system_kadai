<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'grade', 'name', 'address', 'img_pass', 'comment',
    ];

    protected $attributes = [
        'grade'=>'1',
        'name'=>'none',
        'address'=>'none',
        'img_pass'=>'none',
        'comment'=>'null'
    ];

}
