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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('en_intro')->nullable();
            $table->string('en_description', 2000)->nullable();
            $table->string('image')->nullable();
            $table->string('en_stepsprocedure', 5000)->nullable();
            $table->string('ar_name')->nullable();
            $table->string('ar_intro')->nullable();
            $table->string('ar_description', 2000)->nullable();
            $table->string('ar_stepsprocedure', 5000)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('service_categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
