<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'setting_key',
        'setting_value',
        'setting_type',
        'setting_group'
    ];
    
    /**
     * Get all settings as key-value pairs
     */
    public static function getAllSettings()
    {
        return self::pluck('setting_value', 'setting_key')->toArray();
    }
    
    /**
     * Get settings by group
     */
    public static function getByGroup($group)
    {
        return self::where('setting_group', $group)->pluck('setting_value', 'setting_key')->toArray();
    }
    
    /**
     * Get a single setting value
     */
    public static function get($key, $default = null)
    {
        $setting = self::where('setting_key', $key)->first();
        return $setting ? $setting->setting_value : $default;
    }
    
    /**
     * Set a setting value
     */
    public static function set($key, $value, $type = 'text', $group = 'general')
    {
        return self::updateOrCreate(
            ['setting_key' => $key],
            [
                'setting_value' => $value,
                'setting_type' => $type,
                'setting_group' => $group
            ]
        );
    }
}
