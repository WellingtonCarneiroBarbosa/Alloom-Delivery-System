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
            $table->float('fee_per_km');
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
            $table->string('receiver_cep')->nullable();
            $table->string('receiver_complement')->nullable();
            $table->unsignedInteger("discount_code_id")->nullable();
            $table->foreign("discount_code_id")->references("id")->on("discount_codes")->onUpdate("cascade")->onDelete("set null");
            $table->boolean('pick_up_at_the_counter')->default(false);
            $table->unsignedTinyInteger("order_status_id")->nullable();
            $table->foreign("order_status_id")->references("id")->on("order_status")->onUpdate("cascade")->onDelete("set null");
            $table->string('delivery_fee')->nullable();
            $table->string("totalQuantity");
            $table->string('totalPrice');
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated orders\n";
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
    }
}
