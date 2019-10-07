<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $table ='timetable';
    protected $fillable = ['year','semester','day','time','course_code',
                           'course_name','lec_hall'];
    protected $primaryKey='timetable_id';
    public $timestamps=false;     
}
