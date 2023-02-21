<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('qty')->default(1);
            $table->integer('tva')->nullable();
            $table->integer('total_ttc')->nullable();
            $table->tinyInteger('groupe')->nullable();

            $table->unsignedBigInteger('modele')->nullable();
            $table->foreign('modele')->references('id')->on('modeles')->onDelete('cascade');

			$table->unsignedBigInteger('quote')->nullable();
            $table->foreign('quote')->references('id')->on('quotes')->onDelete('cascade');

			$table->unsignedBigInteger('invoice')->nullable();
            $table->foreign('invoice')->references('id')->on('invoices')->onDelete('cascade');

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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
