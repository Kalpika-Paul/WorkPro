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
        Schema::create('addtasks', function (Blueprint $table) {
            $table->id(); // Automatically creates an unsigned big integer 'id' as primary key
            $table->string('taskName'); // Task name
            $table->string('dept'); // Department
            $table->string('description'); // Task description
            $table->string('priority'); // Task priority
            $table->date('deadline'); // Task deadline
            $table->string('status'); // Task status
            
            // Foreign key to reference the clients table
            $table->unsignedBigInteger('client_id'); // Not nullable, every task must have a client
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade'); // Define foreign key

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addtasks');
    }
};
