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
            $table->user_id();
            $table->bidang_id();
            $table->string('email');
            $table->string('tahun_akademik');
            $table->string('durasi');
            $table->string('peserta1');
            $table->string('peserta2');
            $table->string('peserta3');
            $table->string('resume');
            $table->string('proposal');
            $table->int('status');
            $table->dateTime('tanggal');
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
