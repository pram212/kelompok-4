<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_follows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_diikuti_id');
            $table->unsignedBigInteger('user_pengikut_id');
            $table->integer('indeks');

            $table->foreign('user_diikuti_id')->references('id')->on('users');
            $table->foreign('user_pengikut_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('users_follows');
    }
}
