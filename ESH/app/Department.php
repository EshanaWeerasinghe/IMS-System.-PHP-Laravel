<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table ='department';
    protected $fillable = ['dept_name','hod','degree'];
    protected $primaryKey='dept_id';
    public $timestamps=false;     
}
