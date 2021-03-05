<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSocietyReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('society_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')
                    ->constrained('persons');
            $table->foreignId('tag_id')
                    ->constrained('report_tags');
            $table->foreignId('village_id')
                    ->constrained('villages');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string("title");
            $table->string("content");
            $table->string("image_url");
            $table->enum('status',['menunggu', 'diproses', 'selesai', 'tidak valid']);
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
        Schema::table('society_reports', function (Blueprint $table) {
            Schema::drop('society_reports');
        });
    }
}
