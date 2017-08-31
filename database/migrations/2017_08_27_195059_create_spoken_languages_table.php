<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpokenLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spoken_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('language_name');
            $table->enum('spoken_level',['None','Basic','Fluent','Native'])->default('None');
            $table->enum('writen_level',['None','Basic','Fluent','Native'])->default('None');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('spoken_languages');
    }
}
