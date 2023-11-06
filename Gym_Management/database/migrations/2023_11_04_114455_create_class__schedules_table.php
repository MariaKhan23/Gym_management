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
        Schema::create('class__schedules', function (Blueprint $table) {
            $table->id();
            $table->string('class_name',);
            $table->string('trainer',500);
            $table->string('hours',500);
            $table->string('minutes',500);
            $table->string('capacity',500);
            $table->string('from_start',500);
            $table->string('to_end',500);
            $table->string('date',500);
            $table->softDeletes();
            $table->timestamps();
        });
    }
 
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class__schedules');
    }
};
