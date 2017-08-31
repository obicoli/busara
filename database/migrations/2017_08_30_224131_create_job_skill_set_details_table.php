<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSkillSetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_skill_set_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_post_id')->unsigned();
            $table->integer('skill_set_details_id')->unsigned();
            $table->foreign('job_post_id')->references('id')->on('job_posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('skill_set_details_id')->references('id')->on('skill_set_details')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('job_skill_set_details');
    }
}
