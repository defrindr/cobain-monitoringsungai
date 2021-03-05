<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailIncomingFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_incoming_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId("incoming_fund_id")
                    ->consrained('incoming_funds');
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
        Schema::table('detail_incoming_funds', function (Blueprint $table) {
            Schema::drop('detail_incoming_funds');
        });
    }
}
