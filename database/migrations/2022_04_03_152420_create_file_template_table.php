<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_template', function (Blueprint $table) {
            $table->bigIncrements('id_file_template');
            $table->bigInteger('id_template');
            $table->bigInteger('id_sub_kategori');
            $table->string('file', '50');
            $table->string('gambar_template', '50');
            $table->bigInteger('isActive', '5');
            $table->string('keterangan_file', '20');
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
        Schema::dropIfExists('file_template');
    }
}
