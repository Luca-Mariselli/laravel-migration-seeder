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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string("azienda", 200);
            $table->string("stazione_partenza", 200);
            $table->string("stazione_arrivo", 200);
            $table->time("orario_partenza");
            $table->time("orario_arrivo");
            $table->string("codice_treno", 100);
            $table->integer("numero_carrozze");
            $table->boolean('in_orario');
            $table->boolean('cancellato');

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
