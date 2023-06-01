<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comps_perfils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfil_id')
                  ->constrained('perfils')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('compenvl3_id')
                  ->constrained('compenvl3s')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('calificacion_id')
                  ->constrained('calificacions')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comps_perfils');
    }
};
