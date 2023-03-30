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
        Schema::create('applieds', function (Blueprint $table) {
            $table->id('applied_id');
            $table->timestamps();
            /* $table->string('jobname'); */
            /* $table->string('id'); */
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->unsignedBigInteger('job_id'); 
            $table->foreign('job_id')->references('job_id')->on('job');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->string('username');
            $table->string('contact');
            $table->string('email');
            $table->string('qulification');
            $table->string('experience');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applieds');
    }
};
