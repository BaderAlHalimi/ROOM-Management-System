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
        Schema::create('information', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->boolean('disability')->default(0);
            $table->string('university_specializations');
            $table->enum('education_levels', []);
            $table->foreignId('area_id')->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->timestamps();

            $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
