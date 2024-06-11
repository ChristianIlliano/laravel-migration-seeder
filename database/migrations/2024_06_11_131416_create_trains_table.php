<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Azienda
    *Stazione di partenza string varchar() not null
    *Stazione di arrivo string varchar() not null
    *Orario di partenza dateTime not null
    *Orario di arrivo dateTime
    *Codice Treno string varchar() not null
    *Numero Carrozze tinyInt 
    *In orario tinyInt
    *Cancellato tinyInt
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("starting_station");
            $table->string("arrival_station");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->string("train_code");
            $table->tinyInteger("carriages_number");
            $table->tinyInteger("in_time");
            $table->tinyInteger("cancelled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
