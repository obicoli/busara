<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longtext('description')->nullable();
            $table->string('established_on')->nullable();
            $table->string('website')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('street')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->text('social_name')->nullable();
            $table->text('social_page')->nullable();
            $table->longtext('services')->nullable();
            $table->longtext('expertise')->nullable();
            $table->string('total_people')->nullable();
            $table->string('address')->nullable();
            $table->text('logo')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->integer('profile_completion')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
