<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kaos');
            $table->char('ukuran',10);
            $table->string('bahan',500);
            $table->string('sablon');
            $table->char('warna');
            $table->decimal('harga',14,2);
            $table->integer('stok');
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
        Schema::dropIfExists('kaos');
    }
}
