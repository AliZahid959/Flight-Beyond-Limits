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
        Schema::table('about_page_managers', function (Blueprint $table) {
            
            $table->longText('body')->nullable()->change();
            $table->longText('core_value_description')->nullable()->change();
            $table->longText('honesty_section_description')->nullable()->change();
            $table->longText('innovation_section_description')->nullable()->change();
            $table->longText('commitment_section_description')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_page_managers', function (Blueprint $table) {
            //
        });
    }
};
