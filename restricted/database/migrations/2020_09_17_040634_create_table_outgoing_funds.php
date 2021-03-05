<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOutgoingFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outgoing_fund_category_id')
                    ->constrained('outgoing_fund_categories');
            $table->foreignId('fund_report_id')
                    ->constrained('fund_reports');
            $table->string('total_out');
            $table->text('information')->nullable();
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
        Schema::table('outgoing_funds', function (Blueprint $table) {
            Schema::drop('outgoing_funds');
        });
    }
}
