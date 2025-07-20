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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contacts_id');
            $table->string('contacts_lastname');
            $table->string('contacts_firstname')->nullable();
            $table->string('contacts_phone_number')->nullable();
            $table->string('contacts_email')->nullable();
            $table->integer('company_id')->nullable()->foreign('company_id')->references('companies_id')->on('companies');
            $table->integer('position_id')->nullable()->foreign('position_id')->references('positions_id')->on('positions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
