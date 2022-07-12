<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianKategoriVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_kategori_video', function (Blueprint $table) {
            $table->bigIncrements('id_rincian_kategori_video');
            $table->bigInteger('id_kategori_video');
            $table->text('rincian_kategori_video');
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
        Schema::dropIfExists('rincian_kategori_video');
    }
}
