<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description')->nullable();
            $table->integer('qty')->default(1);
            $table->double('tva', 8, 2);
            $table->string('unite')->nullable();

            $table->unsignedBigInteger('product')->nullable();
           // $table->foreign('product')->references('id')->on('products')->onDelete('cascade');

			$table->unsignedBigInteger('quote')->nullable();
           // $table->foreign('quote')->references('id')->on('quotes')->onDelete('cascade');

			$table->unsignedBigInteger('invoice')->nullable();
            //$table->foreign('invoice')->references('id')->on('invoices')->onDelete('cascade');

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
        Schema::dropIfExists('items');
    }
}
