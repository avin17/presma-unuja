<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presma', function (Blueprint $table) {

            $table->id();
            $table->foreignId('tingkat_id');
            $table->foreignId('bidang_id');
            $table->string('nama_kegiatan');
            $table->string('predikat');
            $table->date('tanggal')->nullable();
            $table->string('pembimbing');
            $table->string('penyelenggara');
            $table->string('tempat');
            $table->string('jumlah_peserta');
            $table->string('jumlah_perguruan_tinggi');
            $table->string('jumlah_negara');
            $table->text('deskripsi_kegiatan');
            $table->string('link');
            $table->enum('status', ['pengajuan', 'disetujui']);
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
        Schema::dropIfExists('presma');
    }
}
