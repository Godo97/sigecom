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
        Schema::create('personas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('ci', 8)->unique();
            $table->string('usuario', 10)->unique();
            $table->string('nombre', 100);
            $table->string('snombre', 100)->nullable();
            $table->string('apellido', 100);
            $table->string('sapellido', 100)->nullable();
            $table->string('foto', 100)->nullable();
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
            $table->foreignId('genero_id')
                  ->constrained('generos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('estatus_id')
                  ->constrained('estatus')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->timestamps();
            $table->string('created_by', 100);
            $table->string('updated_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
