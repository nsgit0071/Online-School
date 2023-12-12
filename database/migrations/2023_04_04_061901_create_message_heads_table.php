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
        Schema::create('message_heads', function (Blueprint $table) {
            $table->id();
            $table->text('main_paragraph');
            $table->text('heading');
            $table->text('paragraph');
            $table->text('message_heading');
            $table->text('btn_text');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_heads');
    }
};
