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
            $table->text('DeskripsiTempat');
            $table->string('Kota',50);
            $table->string('Kecamatan',50);
            $table->text('LokasiTempat');
            $table->string('JenisKategori',50);
            $table->binary('FotoTempat')->nullable();

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
