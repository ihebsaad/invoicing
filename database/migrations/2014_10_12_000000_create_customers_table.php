<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->string('lastname',50)->nullable();
            $table->string('civility',50)->nullable();
            $table->string('name2',50);
            $table->string('company',50);
            $table->string('lastname2',50)->nullable();
            $table->string('civility2',50)->nullable();
            $table->string('email')->nullable();
            $table->string('phone',50)->nullable();
            $table->string('address')->nullable();
            $table->string('city',50)->nullable();
            $table->string('postal',50)->nullable();
            $table->string('country',50)->nullable();

            $table->string('delivery_address')->nullable();
            $table->string('delivery_city',50)->nullable();
            $table->string('delivery_postal',50)->nullable();
            $table->string('delivery_country',50)->nullable();
            $table->integer('commercial')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
