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
            $table->integer('vendor_id');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('product_name');
            $table->string('slug');
            $table->integer('product_code');
            $table->integer('product_price');
            $table->integer('discount');
            $table->integer('discount_price');
            $table->text('short_desc');
            $table->text('long_desc');
            $table->string('thumbnails');
            $table->integer('quantity')->nullable();
            $table->integer('status')->comments('1 for inactive 0 for active');
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
