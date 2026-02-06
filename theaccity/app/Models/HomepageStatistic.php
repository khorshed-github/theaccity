<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageStatistic extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'label',
        'value',
        'suffix',
        'icon',
        'display_order',
        'status'
    ];
}
