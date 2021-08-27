<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePollsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multipoll_polls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('canVisitorsVote')->default(0);
            $table->timestamps();
        });

        Schema::create('multipoll_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->unsignedInteger('poll_id');
            $table->timestamps();
        });

        Schema::create('multipoll_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('question_id');
            $table->integer('votes')->default(0);
            $table->timestamps();
        });

        Schema::create('multipoll_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->unsignedInteger('option_id');
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
        Schema::drop('larapoll_polls');
    }
}