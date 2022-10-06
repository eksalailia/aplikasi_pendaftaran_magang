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
        Schema::table('users', function (Blueprint $table) {
            $table->string('univ')->nullable();
            $table->string('nim')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('semester')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->varchar('univ')->nullable();
            $table->char('nim')->nullable();
            $table->varchar('jurusan')->nullable();
            $table->integer('semester')->nullable();
        });
    }
};
