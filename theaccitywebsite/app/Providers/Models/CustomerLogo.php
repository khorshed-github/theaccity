<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLogo extends Model
{
    use HasFactory;

    protected $table = 'customer-logo'; // Specify the table name
    protected $fillable = ['title', 'file_name', 'status'];
}


