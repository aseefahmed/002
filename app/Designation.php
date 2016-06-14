<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['designation_name', 'description', 'created_at', 'updated_at'];
}
