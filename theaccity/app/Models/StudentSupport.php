<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSupport extends Model
{
    use HasFactory;

    protected $table = 'student_support'; // Specify the table name
    protected $fillable = ['menuid','submenuid','author','title', 'shot_desc', 'file_name', 'status'];
}


