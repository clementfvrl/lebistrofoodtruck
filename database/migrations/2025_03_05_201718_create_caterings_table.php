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
        Schema::create('caterings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('company')->nullable();
            $table->string('event_type');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('venue_name')->nullable();
            $table->string('venue_address');
            $table->integer('guests');
            $table->string('package');
            $table->json('dietary_requirements')->nullable();
            $table->json('additional_services')->nullable();
            $table->decimal('budget', 10, 2)->nullable();
            $table->text('message')->nullable();
            $table->string('how_heard')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caterings');
    }
};
