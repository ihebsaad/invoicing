<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modeles', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('type'); //Fenêtre à souflet 10 , Fenêtre / porte fenêtre 20  /
            $table->integer('couleur')->default(1);
            $table->integer('hauteur');
            $table->integer('largeur');
            $table->double('prix', 8, 2);
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
        Schema::table('models', function (Blueprint $table) {
            //
        });
    }
}
