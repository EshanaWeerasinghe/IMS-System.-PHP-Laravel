<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $table = 'academics';
    protected $fillable=['academic'];
    protected $primarykey='academic_id';
    public $timestamps=false;
}
