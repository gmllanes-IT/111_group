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
        Schema::create('questionsform1s', function (Blueprint $table) {
            $table->id();
            $table->string('country_name')->nullable();
            $table->string('en_qust1')->nullable();
            $table->string('ar_qust1')->nullable();
            $table->enum('answer1_type',['select','text'])->default('text');
            $table->string('en_qust2')->nullable();
            $table->string('ar_qust2')->nullable();
            $table->enum('answer2_type',['select','text'])->default('text');
            $table->string('en_qust3')->nullable();
            $table->string('ar_qust3')->nullable();
            $table->enum('answer3_type',['select','text'])->default('text');
            $table->string('en_qust4')->nullable();
            $table->string('ar_qust4')->nullable();
            $table->enum('answer4_type',['select','text'])->default('text');
            $table->string('en_qust5')->nullable();
            $table->string('ar_qust5')->nullable();
            $table->enum('answer5_type',['select','text'])->default('text');
            $table->string('en_qust6')->nullable();
            $table->string('ar_qust6')->nullable();
            $table->enum('answer6_type',['select','text'])->default('text');
            $table->string('en_qust7')->nullable();
            $table->string('ar_qust7')->nullable();
            $table->enum('answer7_type',['select','text'])->default('text');
            $table->string('en_qust8')->nullable();
            $table->string('ar_qust8')->nullable();
            $table->enum('answer8_type',['select','text'])->default('text');
            $table->string('en_qust9')->nullable();
            $table->string('ar_qust9')->nullable();
            $table->enum('answer9_type',['select','text'])->default('text');
            $table->string('en_qust10')->nullable();
            $table->string('ar_qust10')->nullable();
            $table->enum('answer10_type',['select','text'])->default('text');
            $table->string('en_qust11')->nullable();
            $table->string('ar_qust11')->nullable();
            $table->enum('answer11_type',['select','text'])->default('text');
            $table->string('en_qust12')->nullable();
            $table->string('ar_qust12')->nullable();
            $table->enum('answer12_type',['select','text'])->default('text');
            $table->string('en_qust13')->nullable();
            $table->string('ar_qust13')->nullable();
            $table->enum('answer13_type',['select','text'])->default('text');
            $table->string('en_qust14')->nullable();
            $table->string('ar_qust14')->nullable();
            $table->enum('answer14_type',['select','text'])->default('text');
            $table->string('en_qust15')->nullable();
            $table->string('ar_qust15')->nullable();
            $table->enum('answer15_type',['select','text'])->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionsform1s');
    }
};
