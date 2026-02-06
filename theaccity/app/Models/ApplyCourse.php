<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ApplyCourse extends Model
{
     use HasFactory;

    // Table name (optional — Laravel will assume 'apply_courses')
    protected $table = 'apply_course';
    
    protected $fillable = ['name','email','phone','country','pref_day','pref_time'];
}


