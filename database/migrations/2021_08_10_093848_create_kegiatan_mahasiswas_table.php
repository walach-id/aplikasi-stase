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
        Schema::create('kegiatan_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dosen_id');
            $table->bigInteger('matkul_id');
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
