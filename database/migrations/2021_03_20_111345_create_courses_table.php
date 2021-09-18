<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');

            //create Course
            $table->string('title');   
            $table->string('sub_title')->nullable();
            $table->longText('description');
            $table->longText('faq')->nullable();
            $table->longText('refund_policy')->nullable();                  
            $table->longText('about_instructor')->nullable();
            $table->string('playlist_url');            
            $table->string('tags')->nullable(); //php, laravel, html, css
            $table->string('photo')->nullable();
            $table->string('promo_video_url')->nullable();
            $table->integer('creator_status')->default(0);  //live: 1, not live:0            
            $table->integer('admin_status')->default(0);  //live: 1, not live:0

            //target audience
            $table->longText('what_will_students_learn')->nullable();
            $table->longText('target_students');
            $table->longText('requirements')->nullable();

            //price and coupons
            $table->double('discount_price', 10, 2);
            $table->double('actual_price', 10, 2);

            //stats
            $table->integer('main_course_id')->nullable(); //empty
            $table->integer('summary_course_id')->nullable(); //empty
            $table->integer('view_count')->nullable()->default(0);
            $table->integer('subscriber_count')->nullable()->default(0);       

            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
