<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('combustiveis', function (Blueprint $table) {
            $table->id();
            $table->string('combustivel');
            $table->decimal('valor', 8, 2);
            $table->decimal('distancia', 8, 2);
            $table->decimal('consumo', 8, 2);
            $table->decimal('litros_usados', 8, 2);
            $table->decimal('gasto', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('combustiveis');
    }
};

