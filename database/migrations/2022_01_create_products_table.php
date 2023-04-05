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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->nullable()->constrained('product_categories');
            $table->string('product_name')->unique();
            $table->string('slug');
            $table->decimal('price');
            $table->text('description')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_video')->nullable();
            $table->longText('body')->nullable();

            $table->text('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('products');
    }
};
