<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $table ='marks';
    protected $fillable=['mark_id','index_no','marks'];
    protected $primaryKey='mark_id';
    public $timestamps=false;       
}
