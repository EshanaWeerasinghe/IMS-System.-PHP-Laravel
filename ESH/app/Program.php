<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $fillable = ['program','description','degree_type'];
    protected $primaryKey='program_id';
    public $timestamps=false;
    
}
