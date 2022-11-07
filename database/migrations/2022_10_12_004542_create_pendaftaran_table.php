<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('bidang_id');
            $table->foreign('bidang_id')
                    ->references('id')
                    ->on('bidang')
                    ->onDelete('cascade');
            $table->string('email');
            $table->string('tahun_akademik');
            $table->string('jurusan');
            $table->string('durasi');
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_selesai');
            $table->string('peserta1');
            $table->string('peserta2');
            $table->string('peserta3');
            $table->string('resume');
            $table->string('proposal');
            $table->string('surat_keterangan');
            $table->integer('status')->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->dateTime('tgl_review')->nullable();
            $table->integer('status_aktivasi')->nullable();
            $table->dateTime('tgl_aktivasi')->nullable();
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
        Schema::dropIfExists('pendaftaran');
    }
};
