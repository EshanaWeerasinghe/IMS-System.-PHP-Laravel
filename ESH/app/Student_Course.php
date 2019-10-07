<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student_Course extends Model
{
    protected $table ='Student_Course';
   protected $fillable=['course_unit','title','level'];
    protected $primaryKey='course_id';
    public $timestamps=false;       
}
