<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('country_code')->nullable();
            $table->timestamp('dob')->nullable();
            $table->enum('gender',['Male','Female','Others'])->default('Male');
            $table->text('profile_photo')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('email_confirmed')->default(false);
            $table->boolean('phone_confirmed')->default(false);
            $table->boolean('email_notification_active')->default(true);
            $table->boolean('sms_notification_active')->default(true);
            $table->boolean('seen')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
