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
        Schema::create('application_skills', function (Blueprint $table) {
            $table->id('application_skills_id');
            $table->integer('application_id')->nullable()->foreign('application_id')->references('applications_id')->on('applications');
            $table->integer('skill_id')->nullable()->foreign('skill_id')->references('skills_id')->on('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_skills');
    }
};
