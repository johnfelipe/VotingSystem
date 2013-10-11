<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PoliticalPartiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   Schema::dropIfExists('political_parties');
		Schema::create('political_parties', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('votes');
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
		//
	}

}