<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserApps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_apps', function (Blueprint $table) {
            $table->id();
            $table->string("nik");
            $table->string("email");
            $table->string("name");
            $table->string("lampiran_ktp");
            $table->integer("status")->default(0)->comment('0 = pending, 1 = konfirmasi, 2 = nonaktif');
            $table->string("password")->nullable();
            $table->foreignId("verified_by")->constrained('users')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string("fcm_token")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('user_apps');
    }
}
