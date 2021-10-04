<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookinks', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email');
            // $table->string('url');
            // $table->text('msg');
            // $table->string('title1')->nullable();
            // $table->string('title2')->nullable();
            // $table->string('title3')->nullable();
            // $table->string('subtitle')->nullable();
            $table->string('adress1');
            $table->string('adress2');
            $table->string('adress3');
            $table->string('phone');
            $table->string('mday');
            $table->string('tuday');
            $table->string('wday');
            $table->string('thday');
            $table->string('fday');
            $table->string('satday');
            $table->string('sunday');
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
        Schema::dropIfExists('bookinks');
    }
}
