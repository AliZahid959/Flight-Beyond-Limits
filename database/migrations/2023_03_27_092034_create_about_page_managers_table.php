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
        Schema::create('about_page_managers', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('body')->nullable();
            $table->string('core_value_heading')->nullable();
            $table->string('core_value_description')->nullable();
            $table->boolean('enable_core_value')->default(1);
            $table->string('honesty_section_image')->nullable();
            $table->string('honesty_section_description')->nullable();
            $table->string('innovation_section_image')->nullable();
            $table->string('innovation_section_description')->nullable();
            $table->string('commitment_section_image')->nullable();
            $table->string('commitment_section_description')->nullable();
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
        Schema::dropIfExists('about_page_managers');
    }
};
