<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('settings')->insert([
            [
                'setting_key' => 'about_image_1',
                'setting_value' => 'web-assets/imgs/about/about-1.png',
                'setting_group' => 'homepage',
                'setting_type' => 'image',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'setting_key' => 'about_image_2',
                'setting_value' => 'web-assets/imgs/about/about-2.png',
                'setting_group' => 'homepage',
                'setting_type' => 'image',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    public function down(): void
    {
        DB::table('settings')->whereIn('setting_key', ['about_image_1', 'about_image_2'])->delete();
    }
};
