<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataPasanganWanitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_pasangan_wanita', function (Blueprint $table) {
            $table->bigIncrements('id_pasangan_wanita');
            $table->string('nama_lengkap_wanita');
            $table->string('putri_dari');
            $table->string('nama_bapak_wanita', '100');
            $table->string('nama_ibu_wanita', '100');
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
        Schema::dropIfExists('biodata_pasangan_wanita');
    }
}
