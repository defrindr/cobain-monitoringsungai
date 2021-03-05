<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailOutgoingFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_outgoing_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId("outgoing_fund_id")
                    ->consrained('outgoing_funds');
            $table->string('title');
            $table->string('amount');
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
        Schema::table('detail_outgoing_funds', function (Blueprint $table) {
            Schema::drop('detail_outgoing_funds');
        });
    }
}
