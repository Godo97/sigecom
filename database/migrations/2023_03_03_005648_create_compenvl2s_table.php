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
        Schema::create('compenvl2s', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('codigo', 10);
            $table->string('compenvl2', 100);
            $table->text('descripcion')->nullable();
            $table->foreignId('compenvl1_id')
                  ->constrained('compenvl1s')
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
        Schema::dropIfExists('compenvl2s');
    }
};
