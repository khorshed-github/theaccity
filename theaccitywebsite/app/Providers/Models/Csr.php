<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    use HasFactory;

    protected $table = 'csr'; // Specify the table name
    protected $fillable = ['title', 'file_name', 'status'];
}


