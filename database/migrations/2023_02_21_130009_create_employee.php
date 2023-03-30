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
        Schema::create('employee', function (Blueprint $table) {
            $table->id('employee_id');
           /*  $table->foreignId('user_id')->constrained(); */
            $table->string('empname');
            $table->string('designation');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('empimg');
            $table->string('gender');
            $table->string('phone');
            $table->string('companyemail');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');
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
        Schema::dropIfExists('employee');
    }
};
