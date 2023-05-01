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
        Schema::create('apply', function (Blueprint $table) {
            $table->unsignedBigInteger('jobs_id')->after('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('path');
            $table->string('path_name');
            $table->foreign('jobs_id')->references('id')->on('jobs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply');
    }
};
