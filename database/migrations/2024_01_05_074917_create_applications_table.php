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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('app_main_id');
            $table->unsignedBigInteger('app_sub_id');
            $table->enum('app_type',['indiv','family','corporateOwner','corporateManager','corporateAdmin'])->default('indiv');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('DOB')->nullable();
            $table->string('nationality')->nullable();
            $table->string('mobile')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('residentCountry')->nullable();
            $table->enum('relationship',['spouse','child','parents','sibling'])->nullable();
            $table->string('documents')->nullable();
            $table->string('wetransfer')->nullable();
            $table->boolean('isappointment')->default(0);
            $table->string('additionalInformation')->nullable();
            $table->tinyInteger('numberOfDocuments')->default(0);
            $table->boolean('isMainApp')->default(0);
            $table->enum('status',['pending','approved','inprogress','underreview','unapprove'])->default('pending');
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->enum('documentAttestationType',['CBI','RBI','Government','other'])->nullable();
            $table->enum('documentAttestationPackage',['SinglePackage','FamilyPackage','PerDocument'])->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('passport_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
