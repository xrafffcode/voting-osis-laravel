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
        Schema::create('calons', function (Blueprint $table) {
            $table->id('id_calon');

            $table->string('nama_ketua');
            $table->string('nama_wakil');
            $table->string('foto_ketua', 250);
            $table->string('foto_wakil', 250);
            $table->text('visi');
            $table->text('misi');

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
        Schema::dropIfExists('calons');
    }
};
