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
            $table->string('reg_no')->unique()->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('dept')->nullable();
            $table->string('typeof')->default('student');
            $table->boolean('securitycleared')->default(0);
            $table->boolean('staffairscleared')->default(0);
            $table->boolean('alumnicleared')->default(0);
            $table->boolean('bursarycleared')->default(0);
            $table->boolean('facultycleared')->default(0);
            $table->boolean('librarycleared')->default(0);
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
