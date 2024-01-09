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
        Schema::create('answerform1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id')->references('id')->on('applications')->cascadeOnDelete();
            $table->string('answer1')->nullable();
            $table->string('answer2')->nullable();
            $table->string('answer3')->nullable();
            $table->string('answer4')->nullable();
            $table->string('answer5')->nullable();
            $table->string('answer6')->nullable();
            $table->string('answer7')->nullable();
            $table->string('answer8')->nullable();
            $table->string('answer9')->nullable();
            $table->string('answer10')->nullable();
            $table->string('answer11')->nullable();
            $table->string('answer12')->nullable();
            $table->string('answer13')->nullable();
            $table->string('answer14')->nullable();
            $table->string('answer15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answerform1s');
    }
};
