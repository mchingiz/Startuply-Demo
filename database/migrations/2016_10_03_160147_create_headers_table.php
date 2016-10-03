<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('heading');
            $table->string('paragraph');
            $table->string('button_1_name');
            $table->string('button_1_address');
            $table->string('button_2_name');
            $table->string('button_2_address');
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
        Schema::drop('headers');
    }
}
