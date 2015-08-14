<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_banner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idBanner')->unsigned();
            $table->foreign('idBanner')->references('id')->on('banners');
            $table->string('folder');
            $table->string('filename');
            $table->string('systemfilename');
            $table->integer('idTipoImagenBanner')->unsigned();
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
        Schema::drop('detalle_banner');
    }
}
