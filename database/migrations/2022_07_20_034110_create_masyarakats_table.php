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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id();
            $table->string("nik");
            $table->string("nama_lengkap");
            $table->string("jenis_kelamin");
            $table->string("agama");
            $table->string("pendidikan");
            $table->string("status_pernikahan");
            $table->string("kewarganegaraan");
            $table->string("pekerjaan");
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
        Schema::dropIfExists('masyarakats');
    }
};
