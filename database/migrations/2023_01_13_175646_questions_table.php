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
        Schema::create('question', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->string('image');
            $table->unsignedTinyInteger('position');
            $table->string('ans_1');
            $table->string('ans_2');
            $table->string('ans_3');
            $table->string('ans_4');
            $table->unsignedTinyInteger('correct');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('id')->on('quiz');
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
        Schema::dropIfExists('question');
    }
};
