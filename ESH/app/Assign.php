<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    protected $table ='assign_course';
    protected $fillable = ['semester','year','Ccode','Course','Lecturer'];
    protected $primaryKey='assignc_id';
    public $timestamps=false;     
}
