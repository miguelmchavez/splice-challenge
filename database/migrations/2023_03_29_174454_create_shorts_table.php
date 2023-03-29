<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shorts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('url_id');
            $table->foreign('url_id')->references('id')->on('urls');
            $table->string('short');
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
        Schema::dropIfExists('shorts', function (Blueprint $table) {
            $table->dropForeign(['url_id']);
        });
    }
}
