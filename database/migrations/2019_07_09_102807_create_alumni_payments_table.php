<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_no');
            $table->foreign('reg_no')->references('reg_no')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fullname');
            $table->string('RRR');
            $table->bigInteger('amount')->default(650);
            $table->string('paid')->default(false);
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
        Schema::dropIfExists('alumni_payments');
    }
}
