<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTamuUndanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_tamu_undangan', function (Blueprint $table) {
            $table->bigIncrements('id_biodata_tamu_undangan');
            $table->string('nama_tamu', '50');
            $table->bigInteger('whatsapp');
            $table->text('alamat');
            $table->string('email', '50');
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
        Schema::dropIfExists('biodata_tamu_undangan');
    }
}
