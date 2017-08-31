<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_company_name_hidden')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('verified')->default(false);
            $table->boolean('cancelled')->default(false);
            $table->timestamp('due_date')->nullable();
            $table->string('salary')->nullable();
            $table->string('post_status')->default(0);
            $table->string('title');
            $table->longtext('how_to_apply')->nullable();
            $table->string('experience')->nullable();
            $table->longtext('responsibility')->nullable();
            $table->longtext('requirements')->nullable();
            $table->text('description')->nullable();
            $table->integer('job_location_id')->unsigned()->nullable(); //shows who posted the job
            $table->integer('user_id')->unsigned()->nullable(); //shows who posted the job
            $table->integer('job_type_id')->unsigned()->nullable(); //shows whether job is permanent or not{NOP}
            $table->integer('skill_set_id')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable(); //shows company posted job
            $table->foreign('skill_set_id')->references('id')->on('skill_sets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('job_posts');
    }
}
