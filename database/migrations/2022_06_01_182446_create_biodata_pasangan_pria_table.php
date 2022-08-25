<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataPasanganPriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_pasangan_pria', function (Blueprint $table) {
            $table->bigIncrements('id_pasangan_pria');
            $table->string('nama_lengkap_pria', '100');
            $table->string('putra_dari');
            $table->string('gambar_mempelai_pria', '100');
            $table->string('nama_bapak_pria', '100');
            $table->string('nama_ibu_pria', '100');
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
        Schema::dropIfExists('biodata_pasangan_pria');
    }
}
