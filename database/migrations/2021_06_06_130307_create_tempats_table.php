<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempats', function (Blueprint $table) {
            $table->increments('id',10);
            $table->char('NamaTempat',100);
            $table->string('DeskripsiTempat',255);
            $table->string('Kota',50);
            $table->string('Kecamatan',50);
            $table->string('LokasiTempat',255);
            $table->string('JenisKategori',50);
            $table->binary('FotoTempat');

            // $table->id();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempats');
    }
}
