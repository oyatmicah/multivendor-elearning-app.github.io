<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('course_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->double('amount', 10, 2);
            $table->string('status')->default('started_payment'); //started_payment, returned from payment site
            $table->string('mode_of_payment')->nullable(); //card, cash, online transfer
            $table->string('payment_processor')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
