<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitchenOrderTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchen_order_tokens', function (Blueprint $table) {
            $table->id();
            $table->integer('order_channel_id');
            $table->integer('staff_id');
            $table->timestamp('order_in_time');
            $table->timestamp('order_out_time');
            $table->integer('kot_status_id');
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
        Schema::dropIfExists('kitchen_order_tokens');
    }
}
