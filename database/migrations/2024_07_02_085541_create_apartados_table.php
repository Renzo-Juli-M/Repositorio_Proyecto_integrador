<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartadosTable extends Migration
{
    public function up()
    {
        Schema::create('apartados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dni');
            $table->string('telefono');
            $table->string('estado_civil');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('monto', 8, 2);
            $table->string('apartamento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apartados');
    }
}
