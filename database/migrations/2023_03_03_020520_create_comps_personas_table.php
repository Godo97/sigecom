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
        Schema::create('comps_personas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->foreignId('persona_id')
                  ->constrained('personas')
                  ->onUpdate('cascade')
                  ->onDeleted('cascade');
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
        Schema::dropIfExists('comps_personas');
    }
};
