<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('questionings');
            $table->string('comment');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
