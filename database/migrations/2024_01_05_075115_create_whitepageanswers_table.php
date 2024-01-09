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
        Schema::create('whitepageanswers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id')->references('id')->on('applications')->cascadeOnDelete();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->Integer('stage_no')->nullable();
            $table->Integer('element_no')->nullable();
            $table->string('answer')->nullable();
            $table->string('en_page_title')->nullable();
            $table->string('ar_page_title')->nullable();
            $table->enum('type',['input','select','uploadfile','downloadfile','appointment','text','payment','OCR','shipment'])->nullable();
            $table->string('address')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->enum('appointment_type',['virtual','physical','phone'])->nullable();
            $table->float('price')->nullable();
            $table->string('appointment_location')->nullable();
            $table->enum('payment_type',['stripe','bank_transfer'])->nullable();
            $table->string('en_extra_information')->nullable();
            $table->string('ar_extra_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whitepageanswers');
    }
};
