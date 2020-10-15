<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('slug');
            $table->string('thumbnail')->nullable();
            $table->string('nama_event')->unique();
            $table->date('jadwal');
            $table->integer('total_pertandingan');
            $table->string('grup_wa');
            $table->string('peraturan');
            $table->bigInteger('total_point')->default(0);
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
        Schema::dropIfExists('events');
    }
}
