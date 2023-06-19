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
        Schema::create('chef_composantes', function (Blueprint $table) {
            $table->id('id_chef_comp');
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('adress', 255);
            $table->string('telephone');
            $table->string('id_comp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_composantes');
    }
};
