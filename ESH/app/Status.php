<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Status extends Model 
{
    protected $table='statuses';
    protected $fillable=['student_id','class_id'];
    protected $primarykey = 'status_id';
    public $timestamps=false;
}
