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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('heading_main');
            $table->text('heading');
            $table->text('paragraph');
            $table->text('about_heading');
            $table->text('about_icon');
            $table->text('paragraph_about');
            $table->text('button_text');
            $table->text('display');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
