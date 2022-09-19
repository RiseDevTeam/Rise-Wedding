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
            $table->time('jam_mulai_akad')->nullable();
            $table->date('tanggal_akad')->nullable();
            $table->string('waktu_wilayah_akad', '20')->nullable();
            $table->text('lokasi_akad')->nullable();
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
