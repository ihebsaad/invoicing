<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description')->nullable();
            $table->string('adresse')->nullable();
            $table->string('chaudiere')->nullable();
            $table->string('modalite')->nullable();
            $table->string('devis_signe')->nullable();
            $table->date('date')->nullable();

            $table->integer('tva')->default(0)->nullable();
            $table->integer('remise')->default(0)->nullable();

            $table->double('total_tva', 8, 2)->default(0)->nullable();
            $table->double('total_remise', 8, 2)->default(0)->nullable();
            $table->double('total_ht', 8, 2)->default(0)->nullable();
            $table->double('total_ttc', 8, 2)->default(0)->nullable();

            $table->string('type_aide')->nullable();
            $table->double('aide', 8, 2)->default(0)->nullable();
            $table->double('net', 8, 2)->default(0)->nullable();

            $table->double('montant_finance', 8, 2)->default(0)->nullable();
            $table->double('report_echeance', 8, 2)->default(0)->nullable();
            $table->double('mensualites', 8, 2)->default(0)->nullable();
            $table->double('montant_mensuel', 8, 2)->default(0)->nullable();
            $table->double('montant_assurance', 8, 2)->default(0)->nullable();
            $table->double('taux_nominal', 8, 2)->default(0)->nullable();
            $table->double('taeg', 8, 2)->default(0)->nullable();
            $table->double('pose', 8, 2)->default(0)->nullable();            


            $table->unsignedBigInteger('customer')->nullable();
            $table->foreign('customer')->references('id')->on('customers')->onDelete('cascade');

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
        Schema::dropIfExists('quotes');
    }
}
