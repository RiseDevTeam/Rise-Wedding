<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesananInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan_invitation', function (Blueprint $table) {
            $table->bigIncrements('id_detail_pemesanan');
            $table->bigInteger('id_pemesanan');
            $table->string('file_template', '50')->nullable();
            $table->string('file_vidio')->nullable();
            $table->integer('isActive');
            $table->string('keterangan_file', '30');
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
        Schema::dropIfExists('detail_pemesanan_invitation');
    }
}
