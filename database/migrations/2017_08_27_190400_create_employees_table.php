<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('skill_set_id')->unsigned()->nullable();
            $table->integer('profile_completion')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('sir_name')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender',['Male','Female','Others'])->nullable();
            $table->longtext('more_about_you')->nullable();
            $table->text('address')->nullable();
            $table->string('current_salary')->nullable(); //null because some may not want to disclose their salary
            $table->enum('is_annually_monthly',['Hourly','Daily','Weekly','Monthly','Yearly'])->nullable();
            $table->string('currency')->nullable();
            $table->text('profile_photo')->nullable();
            $table->text('introction')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
