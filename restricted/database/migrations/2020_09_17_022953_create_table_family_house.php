<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFamilyHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')
                    ->constrained('families');
            $table->string('house_name');
$table->decimal('latitude', 20, 16);
$table->decimal('longitude', 20, 16);

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
        Schema::table('family_house', function (Blueprint $table) {
            $table->drop('family_house');
        });
    }
}
