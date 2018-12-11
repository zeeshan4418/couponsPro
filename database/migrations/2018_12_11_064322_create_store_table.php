<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('stores')){
            Schema::create('stores', function (Blueprint $table) {
                $table->increments('id');
                $table->string('store_name');
                $table->string('store_image');
                $table->string('store_link');
                $table->string('store_featured');
                $table->string('store_status');
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
        Schema::dropIfExists('stores');
    }
}


