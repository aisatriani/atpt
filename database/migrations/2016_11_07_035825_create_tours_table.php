<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama_tour',150);
            $table->text('deskripsi');
            $table->char('telp',20)->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->text('itenerary')->nullable();
            $table->text('includes')->nullable();
            $table->decimal('harga',14,2);
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
        Schema::dropIfExists('tours');
    }
}
