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
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Site Name');
            $table->string('site_description')->default('This is Site Description');
            $table->string('default_language')->default('English');
            $table->string('site_favicon')->nullable();
            $table->string('site_logo')->nullable();

            $table->string('contact_heading')->default('Get In Touch');
            $table->string('contact_description')->default('Contact us for quote, or just send us a message');
            $table->string('contact_no')->default('My Contact No');
            $table->string('contact_email')->default('My Email');
            $table->string('contact_address')->default('My Address');

            $table->string('service_title')->nullable();
            $table->string('service_description')->default('Our Services');
            $table->string('service_btn_text')->default('View All Services');
            $table->boolean('service_enable')->default(1);


            $table->string('product_title')->default('Our Products');
            $table->string('product_btn_text')->default('View All Products');
            $table->boolean('product_enable')->default(1);

            $table->string('blog_title')->default('Our Products');
            $table->string('blog_btn_text')->default('View All Products');
            $table->boolean('blog_enable')->default(1);

            $table->string('team_title')->default('Our Team');
            $table->string('team_btn_text')->default('View All Members');
            $table->boolean('team_enable')->default(0);

            $table->string('academy_mail')->default('info@ibnfirnas.com');
            $table->string('academy_no')->default('(+968) 9177 1779');
            $table->string('banner_image')->nullable();;
            $table->string('about_content')->default('About Content');


            $table->string('footer_text')->nullable();

            $table->string('mail_mailer')->nullable();
            $table->string('mail_host')->nullable();
            $table->string('mail_port')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->string('mail_encryption')->nullable();

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
        Schema::dropIfExists('site_contents');
    }
};
