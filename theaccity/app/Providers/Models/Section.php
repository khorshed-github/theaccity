<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'section'; // Specify the table name
    protected $fillable = ['title', 'shot_desc', 'full_desc', 'file_name', 'status'];
}


