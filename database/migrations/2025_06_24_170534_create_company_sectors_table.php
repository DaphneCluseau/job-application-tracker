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
        Schema::create('company_sectors', function (Blueprint $table) {
            $table->id('company_sectors_id');
            $table->integer('company_id')->foreign('company_id')->references('companies_id')->on('companies');
            $table->integer('sector_id')->foreign('sector_id')->references('sectors_id')->on('sectors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_sectors');
    }
};
