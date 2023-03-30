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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->integer('rating');
            $table->text('review');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};