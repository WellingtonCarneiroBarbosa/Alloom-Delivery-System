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
         * Billings table
         *
         */
        Schema::create('receivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('cep')->nullable();
            $table->string('complement')->nullable();
            $table->string('password');
            $table->timestamps();
        });
        echo "\rMigrated receivers\n";

        /**
         * Discount Codes table
         *
         */
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->increments("id");
            $table->string('code');
            $table->float('discount_tax');
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated discount_codes\n";

        /**
         * Delivery Fee
         *
         */
        Schema::create('delivery_fee', function (Blueprint $table) {
            $table->id();
            $table->string('fee_per_km');
            $table->string("maximum_delivery_distance_in_km");
            $table->boolean("default_fee")->default(false);
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated delivery_fee\n";


        /**
         * Orders table
         *
         */
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receiver_id')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('receiver_address')->nullable();
            $table->boolean('confirmed_by_receiver')->default(false);
            $table->string("access_key");
            $table->text("details")->nullable();
            $table->unsignedInteger("discount_code_id")->nullable();
            $table->foreign("discount_code_id")->references("id")->on("discount_codes")->onUpdate("cascade")->onDelete("set null");
            $table->boolean('pick_up_at_the_counter')->default(false);
            $table->string("status", 2)->nullable();
            $table->string('delivery_fee')->nullable();
            $table->string("totalQuantity");
            $table->string('totalPrice');
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated orders\n";

         /**
         * Order Pizza
         */
        Schema::create("pizza_order", function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("pizza_size_id")->nullable();
            $table->foreign("pizza_size_id")->references("id")->on("pizza_sizes")->onUpdate("cascade")->onDelete("set null");
            $table->unsignedInteger("pizza_border_id")->nullable();
            $table->foreign("pizza_border_id")->references("id")->on("pizza_border_prices")->onUpdate("cascade")->onDelete("set null");
            $table->string("pizza_flavors_id"); //array
            $table->string("quantity")->default("1");
            $table->text("details")->nullable();
            $table->string("total_price");
            $table->unsignedBigInteger("order_id")->nullable();
            $table->foreign("order_id")->references("id")->on("orders")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_order\n";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receivers');
        Schema::dropIfExists('discount_codes');
        Schema::dropIfExists('delivery_fee');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('pizza_order');
    }
}
