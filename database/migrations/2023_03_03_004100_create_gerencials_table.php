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
        Schema::create('gerencials', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('codigo', 10)->unique();
            $table->string('gerencial', 50);
            $table->foreignId('gerenciag_id')
                  ->constrained('gerenciags')
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
        Schema::dropIfExists('gerencials');
    }
};
