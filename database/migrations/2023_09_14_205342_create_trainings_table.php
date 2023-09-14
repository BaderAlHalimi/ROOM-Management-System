<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->enum('permanent_type', ['full time', 'part time'])->default('full time');
            $table->integer('number_of_hours');
            $table->date('start_at');
            $table->date('end_at');
            $table->foreignId('monitor')->nullable()
                ->constrained('users', 'id')
                ->nullOnDelete();
            $table->json('days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
