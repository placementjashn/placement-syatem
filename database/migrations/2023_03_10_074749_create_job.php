<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('name',255);
            $table->string('salary');
            $table->string('expirence');
            $table->string('vacancy');
            $table->text('description');
            $table->string('time');
            $table->string('email');
           /*  $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('employee'); */
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
};

