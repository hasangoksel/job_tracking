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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            
            $table->string('name_surname', 255);
            $table->string('phone', 50)->unique();
            $table->string('email', 255)->nullable();
            $table->string('username', 255)->unique();
            $table->string('password');

            $table->date('work_start_date')->nullable();
            $table->date('work_end_date')->nullable();

            $table->decimal('hourly_price', 10, 2)->nullable();

            $table->enum('position', ['apprentice', 'journeyman', 'expert']);

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
