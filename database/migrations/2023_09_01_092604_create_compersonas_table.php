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
        Schema::create('compersonas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->foreignId('persona_id')
                  ->constrained('personas')
                  ->onUpdate('cascade')
                  ->onDeleted('cascade');
            $table->json('competencia')->nullable();
            
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
        Schema::dropIfExists('compersonas');
    }
};