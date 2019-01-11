<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('coupons')) {

            Schema::create('coupons', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('coupon_forum_category');
                $table->integer('coupon_store');
                $table->integer('coupon_category');
                $table->string('coupon_name');
                $table->longText('coupon_description');
                $table->string('coupon_price');
                $table->string('coupon_discount');
                $table->string('coupon_url');
                $table->dateTime('coupon_expiry_date');
                $table->string('coupon_featured');
                $table->string('coupon_exclusive');
                $table->string('coupon_verify');
                $table->string('coupon_status');
                $table->string('coupon_image');
                $table->timestamps();
            });
        }
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
