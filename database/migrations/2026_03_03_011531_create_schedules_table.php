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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');        // [cite: 9, 21]
            $table->text('description');    // [cite: 9, 21]
            $table->date('schedule_date'); // [cite: 9, 21]
            $table->time('start_time'); // [cite: 9, 21]
            $table->time('end_time');   // [cite: 9, 21]
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
