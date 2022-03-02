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
        Schema::create('favorito__categorias', function (Blueprint $table) {
            $table->id('id_fav_cate');
            $table->foreignId('fk_favorito_id')->references('id_favorito')->on('favoritos');
            $table->foreignId('fk_categoria_id')->references('id_categoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorito__categorias');
    }
};
