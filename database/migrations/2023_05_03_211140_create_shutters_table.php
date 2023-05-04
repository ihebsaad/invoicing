<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShuttersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shutters', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->integer('type'); //1 2 3
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
        Schema::table('shutters', function (Blueprint $table) {
            //
        });
    }
}
