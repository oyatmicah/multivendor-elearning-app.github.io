<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('student_id');
            $table->integer('course_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_account_id')->nullable();
            $table->string('available_on_course_page')->default('no'); //yes,no
            $table->string('type')->default('free'); //free, discount
            $table->double('price',10,2);
            $table->string('status')->default('on'); //on, off
            $table->dateTime('deadline'); //one month
            $table->float('countdown_timer',3,2)->nullable();
            $table->integer('total_available');
            $table->integer('total_remaining')->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
