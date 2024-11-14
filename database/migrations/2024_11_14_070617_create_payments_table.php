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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->biginteger('property_id')->nullable();
            $table->string('client_name');
            $table->string('client_id');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->decimal('total_installments',10,2)->nullable();
            $table->decimal('remaining_installments',10,2)->nullable();
            $table->decimal('total_amount',10,2)->nullable();
            $table->decimal('paid_amount',10,2)->nullable();
            $table->decimal('remaining_amount',10,2)->nullable();
            $table->integer('status')->default(0)->comment('0 rent 1 buy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
