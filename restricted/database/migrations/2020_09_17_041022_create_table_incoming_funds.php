<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIncomingFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming_funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incoming_fund_category_id')
                    ->constrained('incoming_fund_categories');
            $table->foreignId('fund_report_id')
                    ->constrained('fund_reports');
            $table->string('total_income');
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
        Schema::table('incoming_funds', function (Blueprint $table) {
            Schema::drop('incoming_funds');
        });
    }
}
