<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->increments('id',10);
            $table->char('NamaResep',200);
            $table->string('DeskripsiResep',500);
            $table->string('Bahan',5000);
            $table->string('LangkahLangkah',5000);
            $table->binary('FotoResep')->nullable();
            $table->char('Rasa',10);
            $table->char('WaktuMakan',10);


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseps');
    }
}
