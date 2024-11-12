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
        Schema::create('allocations', function (Blueprint $table) {
            $table->id();
            $table->biginteger('property_id')->nullable();
            $table->string('client_id');
            $table->string('property_title');
            $table->date('allocation_date');
            $table->string('allocation_type');
            $table->biginteger('price')->nullable();
            $table->date('leave_date');
            $table->string('property_docs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocations');
    }
};
