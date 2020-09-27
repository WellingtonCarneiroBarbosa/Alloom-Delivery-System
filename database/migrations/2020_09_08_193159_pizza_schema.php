<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PizzaSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Pizza Sizes
         */
        Schema::create("pizza_sizes", function(Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("price");
            $table->string("max_flavors");
            $table->string("slices");
            $table->text("description")->nullable();
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_sizes\n";

        /**
         * Pizza Flavors
         */
        Schema::create("pizza_flavors", function(Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->unsignedInteger("label_id");
            $table->foreign("label_id")->references("id")->on("labels")->onUpdate("cascade")->onDelete("cascade");
            $table->string("description");
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_flavors\n";

        /**
         * Pizza Special Borders
         */
        Schema::create("pizza_borders", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->text("description")->nullable();
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_borders\n";

        /**
         * Pizza Flavors Price
         */
        Schema::create("pizza_flavor_prices", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pizza_flavor_id");
            $table->foreign("pizza_flavor_id")->references("id")->on("pizza_flavors")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedInteger("pizza_size_id");
            $table->foreign("pizza_size_id")->references("id")->on("pizza_sizes")->onUpdate("cascade")->onDelete("cascade");
            $table->string("price");
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_flavor_prices\n";


         /**
         * Pizza Borders Prices
         */
        Schema::create("pizza_border_prices", function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("pizza_border_id");
            $table->foreign("pizza_border_id")->references("id")->on("pizza_borders")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedInteger("pizza_size_id");
            $table->foreign("pizza_size_id")->references("id")->on("pizza_sizes")->onUpdate("cascade")->onDelete("cascade");
            $table->string("price");
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated pizza_border_prices\n";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_sizes');
        Schema::dropIfExists('pizza_flavors');
        Schema::dropIfExists('pizza_flavor_prices');
        Schema::dropIfExists('pizza_borders');
        Schema::dropIfExists('pizza_border_prices');
    }
}
