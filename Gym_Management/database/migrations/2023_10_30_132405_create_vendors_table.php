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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name',500)->nullable();
            $table->string('vendor_email',500)->nullable();
            $table->string('vendor_company',500)->nullable();
            $table->string('vendor_contact',500)->nullable();
            $table->string('vendor_address',500)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
