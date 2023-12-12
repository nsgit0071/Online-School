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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->text('heading');
            $table->text('paragraph_view');
            $table->text('phone');
            $table->text('title');
            $table->foreignId('category_id')->constrained();
            $table->text('content_main');
            $table->text('youTube_link');
            $table->text('prise');
            $table->text('telegram_link');
            $table->text('telegram_admin');
            $table->boolean('display')->default(0);
            $table->text('book_page');
            $table->text('pro');
            $table->text('lesson_time');
            $table->text('block_icon');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
