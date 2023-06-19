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
        Schema::create('departements', function (Blueprint $table) {
            $table->id('id_depart');
            $table->string('code_depart', 155);
            $table->string('designa_depart', 155);
            // $table->string('slug', 255);
            $table->integer('statut');
            $table->string('id_comp');
            $table->integer('niveau_id');
            $table->integer('diplome_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
