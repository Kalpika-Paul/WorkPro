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
        Schema::create('allworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id'); // Foreign key from the addtasks table
            $table->unsignedBigInteger('assigned_team'); // Foreign key from the teams table
            $table->string('status'); // Task status (e.g., To Do, In Progress, Completed)
            $table->date('due_date'); // Due date for the task
            $table->text('dependencies')->nullable(); // Task dependencies, can be null
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('task_id')->references('id')->on('addtasks')->onDelete('cascade'); // Reference to addtasks table
            $table->foreign('assigned_team')->references('id')->on('teams')->onDelete('cascade'); // Reference to teams table
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allworks');
    }
};
