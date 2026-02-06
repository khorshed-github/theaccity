<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homepage_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('label'); // e.g. Happy Clients
            $table->integer('value'); // e.g. 200
            $table->string('suffix')->default('+'); // e.g. +
            $table->string('icon')->nullable(); // image path
            $table->integer('display_order')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        
        // Insert default statistics
        DB::table('homepage_statistics')->insert([
            [
                'label' => 'Happy Clients', 
                'value' => 200, 
                'suffix' => '+', 
                'icon' => 'web-assets/imgs/home-4/counter-icon-1.png', 
                'display_order' => 1,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Successful Rates', 
                'value' => 99, 
                'suffix' => '%+', 
                'icon' => 'web-assets/imgs/home-4/counter-icon-2.png', 
                'display_order' => 2,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Visa Process', 
                'value' => 15, 
                'suffix' => 'k+', 
                'icon' => 'web-assets/imgs/home-4/counter-icon-3.png', 
                'display_order' => 3,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'label' => 'Immigration', 
                'value' => 600, 
                'suffix' => '+', 
                'icon' => 'web-assets/imgs/home-4/counter-icon-4.png', 
                'display_order' => 4,
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_statistics');
    }
};
