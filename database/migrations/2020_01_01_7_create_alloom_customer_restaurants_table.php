<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloomCustomerRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloom_customer_restaurants', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->time('opens_at')->nullable();
            $table->time('closes_at')->nullable();
            $table->unsignedInteger('alloom_customer_id')->nullable();
            $table->foreign('alloom_customer_id')->references('id')->on('alloom_customers')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('alloom_customer_restaurants');
    }
}
