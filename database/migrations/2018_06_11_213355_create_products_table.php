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
            $table->integer('code')->unique();
            $table->string('name');
            $table->string('brand_id');
            $table->string('category_id');
            $table->string('sub_category_id');
            $table->float('price');
            $table->integer('stock');
            $table->string('img');
            $table->string('description');
            $table->string('favourite');
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
