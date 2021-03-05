<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSocietyReportReponds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('society_report_responds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')
                    ->constrained('society_reports');
            $table->foreignId('user_id')
                    ->constrained('users');
            $table->string('text');
            $table->enum('from',['app','web'])->default('web');
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
        Schema::table('society_report_responds', function (Blueprint $table) {
            Schema::drop('society_report_responds');
        });
    }
}
