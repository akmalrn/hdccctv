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
        Schema::create('configuration', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->string('path_logo')->nullable();
            $table->string('website_name')->nullable();
            $table->string('title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_descriptions')->nullable();
            $table->string('footer')->nullable();
            $table->string('path_building')->nullable();
            $table->string('path_building_2')->nullable();
            $table->string('title_building')->nullable();
            $table->string('overview_building')->nullable();
            $table->text('description')->nullable();
            $table->string('areas_building')->nullable();
            $table->string('parkings_building')->nullable();
            $table->string('units_building')->nullable();
            $table->string('bedrooms_building')->nullable();
            $table->string('features_building')->nullable();
            $table->text('youtube_superiority')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration');
    }
};
