<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlloomCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alloom_customers', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name');
            $table->string('company_name')->unique();
            $table->string('company_size')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->boolean('is_tester')->default(false);
            $table->string('status', 1)->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alloom_customers');
    }
}
