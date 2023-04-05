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
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->string('software_name')->unique();
            $table->string('slug')->unique();
            $table->string('software_image')->nullable();
            $table->string('description');
            $table->longText('body')->nullable();

            $table->text('meta_keyword');
            $table->string('meta_description');
            $table->string('status')->default('Publish');
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
        Schema::dropIfExists('software');
    }
};
