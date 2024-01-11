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
            $table->text('en_intro')->nullable();
            $table->text('en_description')->nullable();
            $table->string('image')->nullable();
            $table->text('en_stepsprocedure')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('ar_intro')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('ar_stepsprocedure')->nullable();
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
