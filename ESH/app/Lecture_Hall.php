<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Lecture_Hall extends Model
{
    protected $table ='lecture_halls';
    protected $fillable = ['hall_name','capacity'];
    protected $primaryKey='hall_id';
    public $timestamps=false;     
}
