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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('work_order');
            $table->string('office_obs')->nullable();
            $table->string('pdf_path')->nullable();
            $table->string('origin_city')->nullable();
            $table->string('destination_city')->nullable();
            $table->foreignId('vehicle_model_id')->constrained('vehicles');
            $table->foreignId('driver_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklists');
    }
};
