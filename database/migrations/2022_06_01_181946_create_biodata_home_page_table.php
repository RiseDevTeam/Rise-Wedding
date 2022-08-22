<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_home_page', function (Blueprint $table) {
            $table->bigIncrements('id_biodata_home_page');
            $table->string('nama_link', '30');
            $table->string('title', '100');
            $table->string('nama_panggilan_pria', '30');
            $table->string('nama_panggilan_wanita', '30');
            $table->string('kata_pembuka')->nullable();
            $table->string('foto_mempelai', '100');
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
        Schema::dropIfExists('biodata_home_page');
    }
}
