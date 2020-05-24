<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSalerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_saler', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('saler_id')->unsigned();
            $table->integer('discount');
            $table->double('unit_price');
            $table->string('quantity');
            $table->string('description')->nullable();
            $table->string('image');
            $table->string("ingredient");
            $table->string("manufacturing_date");
            $table->string("expiry_date");
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('saler_id')->references('id')->on('salers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_saler');
    }
}
