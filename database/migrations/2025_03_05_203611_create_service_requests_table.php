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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('service_type'); // 'foodtruck', 'photobooth', 'music'
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('date');
            $table->string('location');
            $table->integer('hours')->nullable();
            $table->integer('guests')->nullable();
            $table->string('event_type')->nullable(); // For music service
            $table->string('music_style')->nullable(); // For music service
            $table->text('message')->nullable();
            $table->boolean('is_processed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
