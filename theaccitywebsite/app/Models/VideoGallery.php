<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;

    protected $table = 'video-gallery'; // Specify the table name
    protected $fillable = ['title','link', 'file_name', 'status'];
}


