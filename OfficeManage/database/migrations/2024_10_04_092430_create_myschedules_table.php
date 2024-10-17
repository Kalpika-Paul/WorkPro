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
        Schema::create('myschedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title'); // Schedule name
            $table->string('type'); // Type (Task or Meeting)
            $table->date('date'); // Due date
            $table->text('description')->nullable(); // Description (optional)
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myschedules');
    }
};
