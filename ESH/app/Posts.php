<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
   // protected $table ='assign_course';
    protected $fillable = ['title','body'];
    protected $dates = ['created_at','updated_at'];
       
}
