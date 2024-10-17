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
        Schema::create('sold_property_lists', function (Blueprint $table) {
            $table->id();
            $table->biginteger('property_id')->nullable();
            $table->string('property_title');
            $table->string('property_address');
            $table->string('client_name');
            $table->string('client_id');
            $table->string('email');
            $table->string('phone');
            $table->biginteger('total_installments');
            $table->biginteger('remaining_installments');
            $table->biginteger('total_amount');
            $table->biginteger('paid_amount');
            $table->biginteger('remaining_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sold_property_lists');
    }
};
