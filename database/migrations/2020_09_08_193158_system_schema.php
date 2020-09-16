<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SystemSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Users table
         *
         */
        Schema::create('users', function (Blueprint $table) {
            $table->tinyIncrements("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        echo "\rMigrated users\n";

        /**
         * Password resets table
         *
         */
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        echo "\rMigrated password_resets\n";

        /**
         * Failed jobs table
         *
         */
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
        echo "\rMigrated failed_jobs\n";

        /**
         * Tenants table
         *
         */
        Schema::create('tenants', function (Blueprint $table) {
            $table->smallIncrements("id");
            $table->string('url_prefix')->unique();
            $table->timestamps();
        });
        echo "\rMigrated tenants\n";

        /**
         * Franchises Table
         */
        Schema::create("franchises", function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("url_prefix");
            $table->unsignedSmallInteger("tenant_id");
            $table->foreign("tenant_id")->references("id")->on("tenants")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated franchises\n";

        /**
         * Franchieses Users table
         *
         */
        Schema::create('franchise_users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_master')->default(false);
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->rememberToken();
            $table->timestamps();
        });
        echo "\rMigrated franchise_users\n";

        /**
         * Tenant Configurations table
         *
         */
        Schema::create('franchise_configurations', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated franchise_configurations\n";


        /**
         * Status table
         *
         */
        Schema::create('order_status', function (Blueprint $table) {
            $table->tinyIncrements("id");
            $table->string('name');
            $table->float('progress');
            $table->timestamps();
        });
        echo "\rMigrated order_status\n";

        /**
         * Labels table
         *
         */
        Schema::create('labels', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->unsignedInteger("franchise_id");
            $table->foreign("franchise_id")->references("id")->on("franchises")->onUpdate("cascade")->onDelete("cascade");
            $table->timestamps();
        });
        echo "\rMigrated labels\n";


        //Status::create([
        //    'name' => '',
        //    'progress' => '',
        //]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('tenants');
        Schema::dropIfExists('franchises');
        Schema::dropIfExists('franchise_users');
        Schema::dropIfExists('franchise_configurations');
        Schema::dropIfExists('order_status');
        Schema::dropIfExists('labels');
    }
}
