<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table ='lecturer';
    protected $fillable = ['lec_title','lec_name','lec_dept','lec_designation'];
    protected $primaryKey='lec_id';
    public $timestamps=false;     
}
