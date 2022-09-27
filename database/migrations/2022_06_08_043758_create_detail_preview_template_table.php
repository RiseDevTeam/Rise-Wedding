<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPreviewTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_preview_template', function (Blueprint $table) {
            $table->bigIncrements('id_detail_preview');
            $table->bigInteger('id_preview_template_pemesanan');
            $table->string('file_template');
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
        Schema::dropIfExists('detail_preview_template');
    }
}
