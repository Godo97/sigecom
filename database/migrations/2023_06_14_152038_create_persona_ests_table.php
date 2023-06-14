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
        Schema::create('persona_ests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')
                  ->constrained('personas')
                  ->onUpdate('cascade')
                  ->onDeleted('cascade');
            $table->foreignId('gerenciag_id')
                  ->constrained('gerenciags')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('gerencial_id')
                  ->constrained('gerencials')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('coordinacion_id')
                  ->constrained('coordinacions')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('cargo_id')
                  ->constrained('cargos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('estatus_id')
                  ->constrained('estatus')
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
        Schema::dropIfExists('persona_ests');
    }
};
