<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('label');
            $table->string('value');
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('questionings');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
