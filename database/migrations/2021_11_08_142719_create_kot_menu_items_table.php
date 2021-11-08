<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatekotMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kot_menu_items', function (Blueprint $table) {
            $table->id();
            $table->integer('kot_id'); //FK
            $table->integer('menu_item_id'); //FK
            $table->integer('quantity'); 
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
        Schema::dropIfExists('kot_menu_items');
    }
}
