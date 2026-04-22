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
        Schema::create('careers', function (Blueprint $row) {
            $row->id();
            $row->string('fullName');
            $row->text('address');
            $row->string('phone');
            $row->string('email');
            $row->text('immigration');
            $row->string('nationality');
            $row->text('education');
            $row->string('cv');
            $row->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
