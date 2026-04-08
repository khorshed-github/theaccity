<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Specify the table name
    protected $fillable = ['author','title', 'shot_desc', 'file_name', 'status'];
}


