<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->integer('tingkat');
            $table->string('tempat_praktek');
            $table->integer('pertemuan_ke');
            $table->dateTime('waktu_pertemuan');
            $table->string('topik_pertemuan');
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
        Schema::dropIfExists('kegiatan_dosens');
    }
}
