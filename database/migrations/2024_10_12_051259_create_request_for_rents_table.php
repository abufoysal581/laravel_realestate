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
        Schema::create('requests_for_rents', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('email')->nullable();
            $table->biginteger('phone')->nullable();
            $table->string('property_title');
            $table->biginteger('property_id')->nullable();
            $table->biginteger('request_date')->nullable();
            $table->string('rental_duration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests_for_rents');
    }
};
