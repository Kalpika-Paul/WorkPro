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
        Schema::create('interns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dept');
            $table->string('supervisor');
            $table->string('stipend');
            $table->string('edu');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->date('start_date');
           
            $table->date('end_date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interns');
    }
};