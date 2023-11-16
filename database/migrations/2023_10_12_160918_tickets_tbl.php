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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('flightno');
            $table->unsignedBigInteger('plane_id');
            $table->foreign('plane_id')->references('planes_id')->on('planes');
            $table->unsignedBigInteger('from');
            $table->foreign('from')->references('id')->on('places');
            $table->unsignedBigInteger('to');  
            $table->foreign('to')->references('id')->on('places');
            $table->time('arrival');
            $table->time('departure');  
            $table->date('date');
            $table->string('remainingseats');     
            $table->string('price');
            $table->string('airport_a')->nullable();     
            $table->string('airport_d')->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
