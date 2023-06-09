<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_banner_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('slider_image');
            $table->string('title');
            $table->string('description');
            $table->string('slug');
            $table->string('btn_link');
            $table->string('btn_text');
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
        Schema::dropIfExists('home_banner_sliders');
    }
};
