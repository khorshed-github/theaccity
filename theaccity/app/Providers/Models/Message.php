<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'md-message'; // Specify the table name
    protected $fillable = ['author','title', 'shot_desc', 'file_name', 'status'];
}


