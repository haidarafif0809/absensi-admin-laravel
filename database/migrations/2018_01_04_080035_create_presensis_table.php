<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('presensi', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nik');
        $table->string('nama');
        $table->time('jam_masuk');
        $table->time('jam_pulang');
        $table->datetime('jam_mulai_istirahat');
        $table->datetime('jam_selesai_istirahat');
        $table->date('tanggal_masuk');
        $table->date('tanggal_pulang');
        $table->datetime('waktu_masuk');
        $table->datetime('waktu_pulang');
        $table->time('jam_kerja');
        $table->time('jam_lembur');
        $table->string('gambar');
        $table->string('gambar_pulang');
        $table->string('lokasi_absen_masuk');
        $table->string('lokasi_absen_pulang');
        $table->string('latitude_masuk');
        $table->string('latitude_pulang');
        $table->string('longitude_masuk');
        $table->string('longitude_pulang');
        $table->text('keterangan_masuk');
        $table->text('keterangan_pulang');
        $table->unsignedInteger('created_by')->nullable()->index();            
        $table->unsignedInteger('updated_by')->nullable()->index();
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
        Schema::dropIfExists('presensi');
    }
}
