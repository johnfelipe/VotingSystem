<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConstuenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('constituencies');
		Schema::create('constituencies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('constituency')->unique();
            $table->string('mp_name');
            $table->integer('vote_count')->default(0);
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