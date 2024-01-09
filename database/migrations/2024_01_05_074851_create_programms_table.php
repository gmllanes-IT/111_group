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
        Schema::create('programms', function (Blueprint $table) {
            $table->id();
            $table->string('en_country_name')->nullable();
            $table->string('ar_country_name')->nullable();
            $table->string('en_intro')->nullable();
            $table->string('ar_intro')->nullable();
            $table->string('en_details')->nullable();
            $table->string('ar_details')->nullable();
            $table->string('en_required_documents')->nullable();
            $table->string('ar_required_documents')->nullable();
            $table->string('img')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->unsignedBigInteger('form1_id')->nullable();
            $table->foreign('form1_id')->references('id')->on('questionsform1s')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programms');
    }
};
