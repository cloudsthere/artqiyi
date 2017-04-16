<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderWareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_wares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('ware_id');
            $table->string('ware_name');
            $table->decimal('price', 6, 2);
            $table->integer('num');
            $table->decimal('total_price', 8, 2);
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
        Schema::drop('order_wares');
    }
}
