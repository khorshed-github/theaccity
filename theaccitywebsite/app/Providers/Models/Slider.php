<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders'; // Specify the table name
    protected $fillable = ['type','title', 'shot_desc', 'file_name', 'status'];
}


