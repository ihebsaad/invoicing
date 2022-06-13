<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference')->nullable();
            $table->double('prix_ht', 8, 2);
            $table->double('prix', 8, 2);
            $table->integer('tva');
            $table->string('description')->nullable();
            $table->string('type')->nullable();

            $table->unsignedBigInteger('categorie')->nullable();
            $table->foreign('categorie')->references('id')->on('categories')->onDelete('cascade');
            
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
        Schema::dropIfExists('products');
    }
}
