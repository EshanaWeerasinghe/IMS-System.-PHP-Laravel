<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table ='student_degree';
    protected $fillable=['Degree_Name'];
    protected $primaryKey='degree_id';
    public $timestamps=false;       
}
