<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn('type_aide');
            $table->double('aide_cee', 8, 2)->nullable();
            $table->double('aide_renov', 8, 2)->nullable();
            $table->double('total_protocole', 8, 2)->nullable();
            $table->double('tva_protocole', 8, 2)->nullable();
            $table->double('protocole', 8, 2)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
