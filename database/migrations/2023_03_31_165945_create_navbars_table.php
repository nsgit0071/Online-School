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
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable();
            $table->text('first_link');
            $table->text('second_link');
            $table->text('third_link');
            $table->text('fourth_link');
            $table->text('fifth_link');
            $table->text('sixth_link');
            $table->text('phone_number');
            $table->boolean('display')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
