<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50);
            $table->string('produto', 50);
            $table->integer('id_estoque')->unsigned();
            $table->string('descricao', 250);
            $table->string('lote', 40);
            $table->float('preco', 8, 2);
            $table->float('custo', 8, 2);
            $table->integer('quantidade');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('id_estoque')->references('id')->on('depositos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
