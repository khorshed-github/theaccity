<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $table = 'photo-gallery'; // Specify the table name
    protected $fillable = ['type','title', 'file_name', 'status'];
}


