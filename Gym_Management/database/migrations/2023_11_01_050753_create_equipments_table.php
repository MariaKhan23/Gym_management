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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('equipment_name',500);
            $table->string('equipment_categories',500);
            $table->string('equipment_description',500);
            $table->string('equipment_quantity',500);
            $table->string('equipment_purchase_date',500);
            $table->string('equipment_expire_date',500);
            $table->string('vendor',500);
            $table->string('equipment_piece_cost',500);
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
