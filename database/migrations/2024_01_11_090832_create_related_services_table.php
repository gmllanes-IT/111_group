<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('related_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('related_service_id');
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('related_service_id')->references('id')->on('services')->onDelete('cascade');
            $table->unique(['service_id', 'related_service_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('related_services');
    }
};
