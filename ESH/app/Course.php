<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'student_course';
    protected $fillable=['course_unit','title','level'];
    protected $primarykey='course_id';
    public $timestamps=false;
}
