<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_dosen');
            $table->bigInteger('id_matkul');
            $table->dateTime('waktu_kegiatan');
            $table->string('uraian_kegiatan');
            $table->integer('tingkat_pencapaian');
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
        Schema::dropIfExists('kegiatan_mahasiswas');
    }
}
