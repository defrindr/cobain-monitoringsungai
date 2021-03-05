<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePersons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')
                    ->constrained('families');
            $table->foreignId('village_id')
                    ->constrained('villages');
            $table->foreignId('blood_type_id')
                    ->constrained('blood_types');
            $table->foreignId('family_status_id')
                    ->constrained('family_statuses');
            $table->foreignId('agama_id')
                    ->constrained('agamas');
            $table->string('nik')
                    ->unique();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->text('address');
            $table->enum('sex', ['L', 'P']);
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('foto')->nullable();
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
        Schema::table('persons', function (Blueprint $table) {
            Schema::drop('persons');
        });
    }
}
