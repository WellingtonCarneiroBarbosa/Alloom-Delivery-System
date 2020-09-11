<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliverySchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Restaurants table
         *
         */
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->string('unit_url_prefix');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated restaurants\n";

        /**
         * Labels table
         *
         */
        Schema::create('labels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated labels\n";


        /**
         * Products table
         *
         */
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->foreignId('label_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated products\n";

        /**
         * Product available on table
         *
         */
        Schema::create('product_available_on', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('restaurant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated product_available_on\n";


        /**
         * Pizza flavors table
         *
         */
        Schema::create('pizza_flavors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('label_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated pizza_flavors\n";

        /**
         * Pizza flavor available on table
         *
         */
        Schema::create('pizza_flavor_available_on', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_flavor_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('restaurant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated pizza_flavor_available_on\n";

        /**
         * Pizza sizes table
         *
         */
        Schema::create('pizza_sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated pizza_sizes\n";

        /**
         * Pizza size available on table
         *
         */
        Schema::create('pizza_size_available_on', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_size_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('restaurant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated pizza_size_available_on\n";

        /**
         * Billings table
         *
         */
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('cep')->nullable();
            $table->string('complement')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        echo "\rMigrated billings\n";

        /**
         * Discount Codes table
         *
         */
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->float('discount_tax');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated discount_codes\n";

        /**
         * Delivery Fee
         *
         */
        Schema::create('delivery_fee', function (Blueprint $table) {
            $table->id();
            $table->float('fee_per_km');
            $table->foreignId('restaurant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated delivery_fee\n";


        /**
         * Orders table
         *
         */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('billing_id')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->string('billing_name')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_cep')->nullable();
            $table->string('billing_complement')->nullable();
            $table->string('discount_code')->nullable();
            $table->boolean('pick_up_at_the_counter')->default(false);
            $table->foreignId('status_id')->nullable()->onUpdate('cascade')->onDelete('set null');
            $table->float('delivery_fee')->nullable();
            $table->float('total');
            $table->foreignId('restaurant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated orders\n";

        /**
         * Order products table
         *
         */
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('order_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated order_products\n";

        /**
         * Order pizzas table
         *
         */
        Schema::create('order_pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('order_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        echo "\rMigrated order_pizzas\n";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
        Schema::dropIfExists('product_labels');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_available_on');
        Schema::dropIfExists('pizza_flavors');
        Schema::dropIfExists('pizza_flavor_available_on');
        Schema::dropIfExists('pizza_sizes');
        Schema::dropIfExists('pizza_size_available_on');
        Schema::dropIfExists('billings');
        Schema::dropIfExists('discount_codes');
        Schema::dropIfExists('delivery_fee');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_products');
        Schema::dropIfExists('order_pizza');
    }
}
