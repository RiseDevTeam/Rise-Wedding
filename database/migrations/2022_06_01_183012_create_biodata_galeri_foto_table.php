<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataGaleriFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_galeri_foto', function (Blueprint $table) {
            $table->bigIncrements('id_galeri_foto');
            $table->string('gambar_mempelai', '100')->nullable();
            $table->string('gambar_mempelai_pria', '100')->nullable();
            $table->string('gambar_mempelai_wanita', '100')->nullable();
            $table->string('galeri_foto1', '100')->nullable();
            $table->string('galeri_foto2', '100')->nullable();
            $table->string('galeri_foto3', '100')->nullable();
            $table->string('galeri_foto4', '100')->nullable();
            $table->string('galeri_foto5', '100')->nullable();
            $table->string('galeri_foto6', '100')->nullable();
            $table->string('galeri_foto7', '100')->nullable();
            $table->string('galeri_foto8', '100')->nullable();
            $table->string('galeri_foto9', '100')->nullable();
            $table->string('galeri_foto10', '100')->nullable();
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
        Schema::dropIfExists('biodata_galeri_foto');
    }
}
