<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_scores', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('date');
            $table->string('tournament_name');
            $table->string('outcome'); // victory or defeat
            $table->string('opposing_team');
            $table->string('stadium');
            $table->string('top_team');
            $table->string('bot_team');
            $table->string('top_score'); // カンマ区切り
            $table->string('bot_score'); // カンマ区切り
            $table->integer('top_hit_num');
            $table->integer('bot_hit_num');
            $table->string('summary');
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
        Schema::dropIfExists('game_scores');
    }
};
