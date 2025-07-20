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
        Schema::create('job_interviews', function (Blueprint $table) {
            $table->id('job_interviews_id');
            $table->date('job_interviews_date');
            $table->string('job_interviews_communication_method')->nullable();
            $table->text('job_interviews_comment')->nullable();
            $table->boolean('job_interviews_direct_contact')->default(false);
            $table->integer('application_id')->nullable()->foreign('application_id')->references('applications_id')->on('applications');
            $table->integer('job_interview_contacts_id')->nullable()->foreign('job_interview_contacts_id')->references('job_interview_contacts_id')->on('job_interview_contacts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_interviews');
    }
};
