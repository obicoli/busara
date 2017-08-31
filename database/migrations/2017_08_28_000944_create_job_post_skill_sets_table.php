<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostSkillSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_post_skill_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_set_id')->unsigned();
            $table->integer('job_post_id')->unsigned();
            $table->string('skill_level')->nullable();
            $table->string('description')->nullable();
            $table->foreign('skill_set_id')->references('id')->on('skill_sets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('job_post_id')->references('id')->on('job_posts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('job_post_skill_sets');
    }
}
