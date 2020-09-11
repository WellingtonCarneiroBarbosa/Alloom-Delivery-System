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
            $table->id();
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
            $table->id();
            $table->string('url_prefix')->unique();
            $table->timestamps();
        });

        echo "\rMigrated tenants\n";

        /**
         * Tenants Users table
         *
         */
        Schema::create('tenant_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_master')->default(false);
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        echo "\rMigrated tenant_users\n";

        /**
         * Tenant Configurations table
         *
         */
        Schema::create('tenant_configurations', function (Blueprint $table) {
            $table->id();
            $table->boolean('price_per_pizza_size')->default(false);
            $table->foreignId('tenant_id')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });


        /**
         * Status table
         *
         */
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('progress');
            $table->timestamps();
        });

        echo "\rMigrated status\n";

        //Status::create([
        //    'name' => '',
        //    'progress' => '',
        //]);

        echo "\rMigrated status\n";
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
        Schema::dropIfExists('status');
        Schema::dropIfExists('tenants');
        Schema::dropIfExists('tenant_users');
    }
}
