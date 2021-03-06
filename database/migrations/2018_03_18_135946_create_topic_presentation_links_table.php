<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicPresentationLinksTable extends Migration
{
    public function up()
    {
        Schema::create('topic_presentation_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->integer('topic_presentation_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('topic_presentation_links');
    }
}
