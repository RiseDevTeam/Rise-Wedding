<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKataPembukaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kata_pembuka', function (Blueprint $table) {
            $table->bigIncrements('id_kata_pembuka');
            $table->string('kategori_kata_pembuka', '40');
            $table->text('kata_pembuka');
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
        Schema::dropIfExists('kata_pembuka');
    }
}
