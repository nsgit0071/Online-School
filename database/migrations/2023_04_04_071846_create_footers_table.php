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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('main_heading');
            $table->text('telegram_link');
            $table->text('youtube_link');
            $table->text('insta_link');
            $table->text('company_name');
            $table->text('paragraph');
            $table->text('phone');
            $table->text('created_by');
            $table->boolean('display');
            $table->boolean('phone_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
