<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shift extends Model
{
    protected $table = 'shifts';
    protected $fillable=['shift'];
    protected $primaryKey='shift_id';
    public $timestamps=false;
}
