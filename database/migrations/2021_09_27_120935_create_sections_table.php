<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('video');
            $table->string('logo');
            $table->string('sect1_title');
            $table->string('sect1_subtitle');
            $table->string('sect1_bg');
            $table->string('sect2_title');
            $table->string('sect2_subtitle');
            $table->string('sect2_bg');
            $table->string('sect3_title');
            $table->string('sect3_subtitle');
            $table->string('sect3_bg');
            $table->string('sect4_title');
            $table->string('sect4_subtitle');
            $table->string('sect4_bg');
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
        Schema::dropIfExists('sections');
    }
}
