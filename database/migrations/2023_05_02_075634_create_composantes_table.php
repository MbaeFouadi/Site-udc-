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
        Schema::create('composantes', function (Blueprint $table) {
            $table->id('id_comp');
            $table->string('code_comp', 155);
            $table->string('design_comp', 255);
            $table->string('slug', 255);
            $table->text('description');
            $table->string('img_comp', 255);
            $table->string('ile', 255);
            $table->string('lieu', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composantes');
    }
};
