<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class SemesterCombination extends Model
{
    protected $table ='semester_combination';
    protected $fillable = ['year','semester','combination','degree','degree_type'];
    protected $primaryKey='Com_id';
    public $timestamps=false;     
}
