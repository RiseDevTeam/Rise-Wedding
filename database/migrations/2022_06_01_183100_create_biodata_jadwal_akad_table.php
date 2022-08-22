<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataJadwalAkadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_jadwal_akad', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal_akad');
            $table->time('jam_mulai_akad', '');
            $table->date('tanggal_akad');
            $table->time('waktu_wilayah_akad');
            $table->text('lokasi_akad');
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
        Schema::dropIfExists('biodata_jadwal_akad');
    }
}
