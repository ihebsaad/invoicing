<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portes', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('qty')->default(1);
            $table->double('price', 8, 2)->nullable();
            $table->double('price_ht', 8, 2);
            $table->string('text')->nullable();
            $table->string('note')->nullable();
            $table->double('total_ttc', 8, 2)->nullable();
            $table->double('pose', 8, 2)->nullable();
            $table->double('tva_pose', 8, 2)->nullable();
            $table->double('pose_ttc', 8, 2)->nullable();
            $table->tinyInteger('groupe')->nullable();
            $table->string('couleur')->nullable();
            $table->tinyInteger('cintrage')->nullable();

            $table->unsignedBigInteger('door')->nullable();
            //$table->foreign('door')->references('id')->on('doors')->onDelete('cascade');

			$table->unsignedBigInteger('quote')->nullable();
            //$table->foreign('quote')->references('id')->on('quotes')->onDelete('cascade');

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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
