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
            $table->string('name');
            $table->double('prix_ht', 8, 2);
            $table->double('prix', 8, 2);
            $table->double('pose', 8, 2);
            $table->double('tva_pose', 8, 2);
            $table->double('pose_ttc', 8, 2);
            $table->double('tva', 8, 2);
            $table->longText('description')->nullable();
            $table->string('unite')->nullable();
            $table->string('reference')->nullable();

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
