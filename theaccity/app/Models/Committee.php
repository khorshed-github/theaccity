<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $table = 'committee'; // Specify the table name
    protected $fillable = ['year','area_id','division_id','district_id','upazila_id','union_id','name','designation','number','email','address','details','facebook','youtube','twitter','linkedin','file_name', 'status'];
}


