<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloomCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloom_customer_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('alloom_customer_products')->onUpdate('cascade')->onDelete('set null');
            $table->string('status', 1)->nullable();
            $table->unsignedInteger('alloom_customer_restaurant_id')->nullable();
            $table->foreign('alloom_customer_restaurant_id')->references('id')->on('alloom_customer_restaurants')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('alloom_customer_orders');
    }
}
