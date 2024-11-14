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
        Schema::create('requests_for_buyings', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('rent_from')->nullable();
            $table->date('rent_to')->nullable();
            $table->bigInteger('property_id')->nullable();
            $table->timestamp('request_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests_for_buyings');
    }
};
