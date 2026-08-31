<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table){
        $table->id();
        $table->string('title',50);
        $table->text('descrioption');
        $table->text('slug');
        $table->text('src');
        $table->integer('price');
        $table->integer('quantitiy');
        $table->tinyInteger('category_id');
        $table->tinyInteger('popularity');
        $table->tinyInteger('mostselling');
      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
