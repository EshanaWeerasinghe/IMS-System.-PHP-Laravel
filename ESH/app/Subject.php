<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table ='subjects';
    protected $fillable = ['sub_code','sub_name'];
    protected $primaryKey='sub_id';
    public $timestamps=false;     
}
