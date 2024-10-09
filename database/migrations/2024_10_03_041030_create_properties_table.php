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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('property_title');
            $table->string('location')->nullable();
            $table->biginteger('price')->nullable();
            $table->string('type')->nullable();
            $table->string('listing_type')->nullable();
            $table->biginteger('bedrooms')->nullable();
            $table->biginteger('bathrooms')->nullable();
            $table->biginteger('area')->nullable();
            $table->biginteger('parking')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
