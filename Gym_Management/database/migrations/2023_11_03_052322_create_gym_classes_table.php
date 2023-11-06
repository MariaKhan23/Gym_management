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
        Schema::create('gym_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name',500)->nullable();
            $table->string('trainer',500)->nullable();
            $table->string('hours',500)->nullable();
            $table->string('minutes',500)->nullable();
            $table->string('class_capacity',500)->nullable();
            $table->softDeletes();
            $table->timestamps();  
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_classes');
    }
};
