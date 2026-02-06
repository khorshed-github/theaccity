<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'section-images'; // Specify the table name
    protected $fillable = ['type','title', 'file_name', 'status'];
}


