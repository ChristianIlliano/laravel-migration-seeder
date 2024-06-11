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
            $table->string("startingStation");
            $table->string("arrivalStation");
            $table->dateTime("departure time");
            $table->dateTime("arrival time");
            $table->string("trainCode");
            $table->tinyInteger("carriagesNumber");
            $table->tinyInteger("inTime");
            $table->tinyInteger("Cancelled");
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
