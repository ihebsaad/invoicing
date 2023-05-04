<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddresToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
            $table->string('delivery_address')->after('pose')->nullable();
            $table->string('delivery_city',50)->nullable();
            $table->string('delivery_postal',50)->nullable();
            $table->string('delivery_country',50)->nullable();
            $table->string('reference',50)->nullable();
            $table->integer('surface')->nullable();
            $table->double('tva_remise', 8, 2)->nullable();
            $table->string('logement',80)->nullable();
            $table->unsignedBigInteger('par')->nullable();
            //$table->foreign('par')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
}
