<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('responsible');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->text('obs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('clients');
    }
}
