<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->mediumText('description');
            $table->longText('content');
            $table->integer('id_cat')->index();
            $table->decimal('price',10, 4);
            $table->decimal('sale', 10, 4);
            $table->integer('size');
            $table->integer('view');
            $table->integer('like_count');
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
