<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    protected $table = 'combination';
    protected $fillable=['combination'];
    protected $primaryKey='combination_id';
    public $timestamps=false;
}
