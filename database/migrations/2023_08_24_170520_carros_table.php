<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {  
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('nome_veiculo');
            $table->string('link');
            $table->string('ano');
            $table->string('combustivel');
            $table->string('portas');
            $table->string('quilometragem');
            $table->string('cambio');
            $table->string('cor');
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
        //
    }
}
