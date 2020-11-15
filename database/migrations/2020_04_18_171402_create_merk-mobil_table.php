<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerkMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merk-mobil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gambar');
            $table->string('type');
            $table->string('harga');
            $table->string('promo1');
            $table->string('promo2');
            $table->string('promo3');
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
        Schema::dropIfExists('merk-mobil');
    }
}
