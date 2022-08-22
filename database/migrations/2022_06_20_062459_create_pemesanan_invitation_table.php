<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_invitation', function (Blueprint $table) {
            $table->bigIncrements('id_pemesanan');
            $table->bigInteger('id_biodata_pelanggan');
            $table->string('kategori_template', '30');
            $table->string('email', '100');
            $table->string('link_hosting')->nullable();
            $table->date('tanggal_pemesanan');
            $table->string('status', '30')->default('pending');
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
        Schema::dropIfExists('pemesanan_invitation');
    }
}
