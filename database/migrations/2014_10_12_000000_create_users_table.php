<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnik', function (Blueprint $table) {
            $table->id();
            $table->integer('tip_korisnika_id')->unsigned()->nullable();
            $table->integer('zanimanje_id')->unsigned()->nullable();
            $table->string('korime')->unique();
            $table->string('email')->unique();
            $table->string('ime');
            $table->string('prezime');
            $table->string('lozinka');
            $table->string('telefonski_broj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
