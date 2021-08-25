<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->string('Profile_created_by')->nullable();
            $table->string('email')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Marital_Status')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Sect')->nullable();
            $table->string('Country_living_in')->nullable();
            $table->string('Country_Code')->nullable();
            $table->string('Mobile_No')->nullable();;
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
