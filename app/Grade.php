<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $table = 'grades';
    protected $fillable = ['school_level', 'classroom_number'];

}
