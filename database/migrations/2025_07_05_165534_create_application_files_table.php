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
        Schema::create('application_files', function (Blueprint $table) {
            $table->id('application_files_id');
            $table->integer('application_id')->nullable()->foreign('application_id')->references('applications_id')->on('applications');
            $table->integer('file_id')->nullable()->foreign('file_id')->references('files_id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_files');
    }
};
