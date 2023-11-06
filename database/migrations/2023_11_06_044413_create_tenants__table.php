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
        Schema::create('tenants_', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone',20);
            $table->string('is_advance_paid');
            $table->date('advance_paid_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants_');
    }
};
