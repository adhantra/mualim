<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayah', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ayah_no')->nullable();
            $table->integer('page')->nullable();
            $table->integer('juz')->nullable();

            $table->longText('text_arab')->nullable();
            $table->longText('text_latin')->nullable();
            $table->longText('text_indonesia')->nullable();
            $table->longText('text_tafsir')->nullable();

            $table->string('tags')->nullable();
            $table->string('cause')->nullable();

            $table->integer('surah_id')->unsigned()->nullable();

            $table->foreign('surah_id')
                ->references('id')
                ->on('surah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayah');
    }
}
