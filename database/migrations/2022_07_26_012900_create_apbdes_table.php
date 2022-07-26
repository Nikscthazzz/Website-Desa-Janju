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
        Schema::create('apbdes', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->default(1);
            $table->string("tahun");
            $table->string("jenis");
            $table->string("nama");
            $table->integer("anggaran");
            $table->integer("realisasi");
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
        Schema::dropIfExists('apbdes');
    }
};
