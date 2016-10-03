<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('tab_id');
            $table->string('heading');
            $table->string('paragraph');
            $table->string('image');
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
        Schema::drop('tab_features');
    }
}
