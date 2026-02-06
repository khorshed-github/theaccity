<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageStatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate to start fresh
        DB::table('homepage_statistics')->truncate();
        
        // Insert default statistics with CORRECT paths (home-5)
        DB::table('homepage_statistics')->insert([
            [
                'label' => 'Happy Clients', 
                'value' => 200, 
                'suffix' => '+', 
                'icon' => 'web-assets/imgs/home-5/counter-icon-1.png', 
                'display_order' => 1,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Successful Rates', 
                'value' => 99, 
                'suffix' => '%+', 
                'icon' => 'web-assets/imgs/home-5/counter-icon-2.png', 
                'display_order' => 2,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Visa Process', 
                'value' => 15, 
                'suffix' => 'k+', 
                'icon' => 'web-assets/imgs/home-5/counter-icon-3.png', 
                'display_order' => 3,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Immigration', 
                'value' => 600, 
                'suffix' => '+', 
                'icon' => 'web-assets/imgs/home-5/counter-icon-4.png', 
                'display_order' => 4,
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}
