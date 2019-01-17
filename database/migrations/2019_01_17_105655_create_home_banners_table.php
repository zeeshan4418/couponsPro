<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('home_banners')) {

            Schema::create('home_banners', function (Blueprint $table) {
                $table->increments('id');
                $table->string('banner_name');
                $table->string('banner_heading');
                $table->string('banner_sub_heading');
                $table->string('banner_overlay');
                $table->string('banner_parallex_effect');
                $table->string('banner_image');
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
        Schema::dropIfExists('home_banners');
    }
}
