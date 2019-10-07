<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentUpload extends Model
{
   protected $table ='studentsupload';
    protected $primaryKey='student_id';
    public $timestamps=false;
}
