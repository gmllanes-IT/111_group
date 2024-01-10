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

        Schema::create('whitepages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id')->references('id')->on('applications')->cascadeOnDelete();
            $table->Integer('stage_no')->nullable();
            $table->Integer('element_no')->nullable();
            $table->string('en_page_title')->nullable();
            $table->string('ar_page_title')->nullable();
            $table->string('en_question_text')->nullable();
            $table->string('ar_question_text')->nullable();
            $table->enum('type',['input','select','uploadfile','downloadfile','appointment','text','payment','OCR','shipment'])->nullable();
            $table->string('address')->nullable();
            $table->date('optional_date_1')->nullable();
            $table->string('optional_time_1')->nullable();
            $table->date('optional_date_2')->nullable();
            $table->string('optional_time_2')->nullable();
            $table->date('optional_date_3')->nullable();
            $table->string('optional_time_3')->nullable();
            $table->enum('appointment_type',['virtual','physical','phone'])->nullable();
            $table->float('price')->nullable();
            $table->string('en_option1')->nullable();
            $table->string('ar_option1')->nullable();
            $table->string('en_option2')->nullable();
            $table->string('ar_option2')->nullable();
            $table->string('en_option3')->nullable();
            $table->string('ar_option3')->nullable();
            $table->string('en_option4')->nullable();
            $table->string('ar_option4')->nullable();
            $table->string('en_option5')->nullable();
            $table->string('ar_option5')->nullable();
            $table->string('en_option6')->nullable();
            $table->string('ar_option6')->nullable();
            $table->string('appointment_location')->nullable();
            $table->enum('payment_type',['stripe','bank_transfer'])->nullable();
            $table->string('wetransfer_link')->nullable();
            $table->string('en_extra_information')->nullable();
            $table->string('ar_extra_information')->nullable();
            $table->enum('payment_status',['success','failed'])->nullable();
            $table->enum('stage_element_status',['pending','underreview','approved','unapprove'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whitepages');
    }
};
