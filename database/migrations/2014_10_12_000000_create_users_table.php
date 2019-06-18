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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('regno')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('typeof')->nullable();
            $table->boolean('securitycleared')->nullable();
            $table->boolean('staffairscleared')->nullable();
            $table->boolean('alumnicleared')->nullable();
            $table->boolean('bursarycleared')->nullable();
            $table->boolean('facultycleared')->nullable();
            $table->boolean('librarycleared')->nullable();
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
