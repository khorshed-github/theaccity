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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('setting_key')->unique();
            $table->text('setting_value')->nullable();
            $table->string('setting_type')->default('text'); // text, textarea, image, number
            $table->string('setting_group')->default('general'); // general, header, footer, homepage
            $table->timestamps();
        });
        
        // Insert default settings
        DB::table('settings')->insert([
            // Header Settings
            ['setting_key' => 'site_name', 'setting_value' => 'Theaccity', 'setting_type' => 'text', 'setting_group' => 'header', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'site_logo', 'setting_value' => 'web-assets/imgs/logo/theaccity.png', 'setting_type' => 'image', 'setting_group' => 'header', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'header_phone', 'setting_value' => '+44 7915 184268', 'setting_type' => 'text', 'setting_group' => 'header', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'header_email', 'setting_value' => 'info@theaccity.com', 'setting_type' => 'text', 'setting_group' => 'header', 'created_at' => now(), 'updated_at' => now()],
            
            // Footer Settings
            ['setting_key' => 'footer_logo', 'setting_value' => 'web-assets/imgs/footer/theaccity.png', 'setting_type' => 'image', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'footer_description', 'setting_value' => 'We are a reliable student visa consultancy, guiding students in university admission, visa processing, and study abroad support. Our goal is to make your journey simple, smooth, and successful.', 'setting_type' => 'textarea', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'footer_address', 'setting_value' => 'London, United Kingdom', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'footer_phone', 'setting_value' => '+44 7915 184268', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'footer_email', 'setting_value' => 'info@theaccity.com', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'copyright_text', 'setting_value' => 'All Rights Reserved - Accity', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            
            // Social Media
            ['setting_key' => 'facebook_url', 'setting_value' => 'https://www.facebook.com/', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'instagram_url', 'setting_value' => 'https://instagram.com/', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'pinterest_url', 'setting_value' => 'https://www.pinterest.com/', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'linkedin_url', 'setting_value' => 'https://linkedin.com/', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'whatsapp_number', 'setting_value' => '4407915184268', 'setting_type' => 'text', 'setting_group' => 'footer', 'created_at' => now(), 'updated_at' => now()],
            
            // Homepage Settings
            ['setting_key' => 'about_heading', 'setting_value' => 'About Us', 'setting_type' => 'text', 'setting_group' => 'homepage', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'about_description', 'setting_value' => 'At ACCity, we are dedicated to connecting ambitious students from across the globe with world-class educational opportunities in the UK and beyond.', 'setting_type' => 'textarea', 'setting_group' => 'homepage', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'about_mission', 'setting_value' => 'Our mission is to empower students—both from the UK and internationally—to unlock their full academic and professional potential by providing transparent, high-quality recruitment and advisory support.', 'setting_type' => 'textarea', 'setting_group' => 'homepage', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'about_vision', 'setting_value' => 'We envision a future in which every student, from every country, has the opportunity to access high-quality higher education—unconstrained by geography, income or background.', 'setting_type' => 'textarea', 'setting_group' => 'homepage', 'created_at' => now(), 'updated_at' => now()],
            ['setting_key' => 'years_of_experience', 'setting_value' => '15', 'setting_type' => 'number', 'setting_group' => 'homepage', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
