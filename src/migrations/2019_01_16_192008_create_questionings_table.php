<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestioningsTable extends Migration
{
    public function up()
    {
        Schema::create('questionings', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('label');
            $table->string('name');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('questionings');
    }
}
