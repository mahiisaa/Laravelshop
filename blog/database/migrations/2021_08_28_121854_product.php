<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
             $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->string('slug');
            $table->string('title');
            $table->string('body');
            $table->integer('User-id')->unsigned();
            $table->text('description');
            $table->string('price');
            $table->string('imageUrl');
            $table->integer('commentsCount')->defaut(0);
            $table->integer('ViewCount')->defalut(0);
            $table->integer('BuyCount')->defalut(0);
            // $table->foreign('user-id')->references('id')->on('users')->onDelete('cascade');
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
