<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('no');
			$table->string('nama_barang');	//membuat kolom nama+
			$table->integer('harga'); //membuat kolom email
			$table->integer('stok'); //membuat username
			$table->date('expired_data'); //membuat password
			$table->date('tanggal_produksi'); //membuat password
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
        Schema::dropIfExists('model_barangs');
    }
}
