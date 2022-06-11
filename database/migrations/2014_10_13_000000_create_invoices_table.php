<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description')->nullable();
            $table->string('adresse')->nullable();
            $table->string('chaudiere')->nullable();
            $table->string('modalite')->nullable();
            $table->date('date')->nullable();

            $table->integer('tva')->nullable();
            $table->integer('remise')->nullable()->default(0); //

            $table->double('total_tva', 8, 2)->nullable();
            $table->double('total_remise', 8, 2)->nullable();
            $table->double('total_ht', 8, 2)->nullable();
            $table->double('total_ttc', 8, 2)->nullable();

            $table->string('type_aide')->nullable();
            $table->double('aide', 8, 2)->nullable();

            $table->double('montant_finance', 8, 2)->nullable();
            $table->double('report_echeance', 8, 2)->nullable();
            $table->double('mensualites', 8, 2)->nullable();
            $table->double('montant_mensuel', 8, 2)->nullable();
            $table->double('montant_assurance', 8, 2)->nullable();
            $table->double('taux_nominal', 8, 2)->nullable();
            $table->double('taeg', 8, 2)->nullable();
            $table->double('pose', 8, 2)->nullable();            


            $table->unsignedBigInteger('customer')->nullable();
            $table->foreign('customer')->references('id')->on('customers')->onDelete('cascade');

            $table->unsignedBigInteger('quote')->nullable();
            $table->foreign('quote')->references('id')->on('quotes')->onDelete('cascade');

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
        Schema::dropIfExists('invoices');
    }
}
