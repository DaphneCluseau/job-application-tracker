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
        Schema::create('job_interview_contacts', function (Blueprint $table) {
            $table->id('job_interview_contacts_id');
            $table->integer('company_id')->foreign('company_id')->references('companies_id')->on('companies');
            $table->integer('job_interview_id')->foreign('job_interview_id')->references('job_interviews_id')->on('job_interviews');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_interview_contacts');
    }
};
