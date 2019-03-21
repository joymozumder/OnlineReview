<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('star');
            $table->string('review');
            $table->integer('uid')->unsigned()->index();
            $table->integer('oid')->unsigned()->index();
            $table->foreign('uid')
               ->references('id')->on('users')
               ->onDelete('cascade');
            $table->foreign('oid')
               ->references('id')->on('organizations')
               ->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
}
