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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->text('about_us');
            $table->text('vision');
            $table->string('cta_label');
            $table->string('cta_url');
            $table->integer('years_count');
            $table->integer('volunteers_count');
            $table->integer('registrants_count');
            $table->integer('destinations_count');
            $table->string('image_1');
            $table->string('image_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
