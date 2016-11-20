<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kids', function(Blueprint $table) {
          $table->increments('id');
          $table->string('first-name');
          $table->string('last-name');
          $table->string('birthdate');
          $table->string('description');
          $table->string('profile-picture');
          $table->integer('school_id')->unsigned();
          $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('kids');
    }
}
