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
        Schema::create('applications', function (Blueprint $table) {
            $table->id('applications_id');
            $table->date('applications_date');
            $table->text('applications_comment');
            $table->string('applications_job_type')->default('CDI');
            $table->integer('applications_skill_id')->nullable()->foreign('application_skill_id')->references('application_skills_id')->on('application_skills');
            $table->integer('company_id')->nullable()->foreign('company_id')->references('companies_id')->on('companies');
            $table->integer('user_id')->foreign('user_id')->references('users_id')->on('users');
            $table->integer('work_mode_id')->nullable()->foreign('work_mode')->references('work_modes_id')->on('work_modes');
            $table->integer('status_id')->nullable()->foreign('status_id')->references('statuses_id')->on('statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
