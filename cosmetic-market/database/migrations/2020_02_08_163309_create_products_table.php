<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name'); 
            $table->integer('category_id');
            $table->integer('discount');
            $table->double('unit_price');
            $table->string('quantity');
            $table->string('description')->nullable();
            $table->string('image');
            $table->string("ingredient");
            $table->string("manufacturing_date");
            $table->string("expiry_date");
            $table->integer('saler_id');
            $table->timestamps();
            $table->softDeletes();
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
