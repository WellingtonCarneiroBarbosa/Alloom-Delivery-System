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
            $table->foreignId('billing_id')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->string('billing_name')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_cep')->nullable();
            $table->string('billing_complement')->nullable();
            $table->string('discount_code')->nullable();
            $table->boolean('pick_up_at_the_counter')->default(false);
            $table->foreignId('status_id')->nullable()->onUpdate('cascade')->onDelete('set null');
            $table->float('delivery_fee')->nullable();
            $table->float('sub_total');
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
        Schema::dropIfExists('billings');
        Schema::dropIfExists('discount_codes');
        Schema::dropIfExists('delivery_fee');
        Schema::dropIfExists('orders');
    }
}
