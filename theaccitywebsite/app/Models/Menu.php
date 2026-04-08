<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Specify the table name
    protected $fillable = ['name', 'status'];
    
    public function submenus()
    {
        return $this->hasMany(SubMenu::class, 'menuid');
    }
}


