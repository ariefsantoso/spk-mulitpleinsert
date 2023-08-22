<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpkosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spkos', function (Blueprint $table) {
            $table->id('id_spko');
            $table->string('remarks')->nullable();
            $table->foreignId('employee');
            $table->date('trans_date')->nullable();
            $table->string('process');
            $table->string('sw');
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
        Schema::dropIfExists('spkos');
    }
}
