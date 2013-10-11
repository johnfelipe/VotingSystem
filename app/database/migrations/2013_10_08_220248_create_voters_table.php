<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVotersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('voters');
		Schema::create('voters', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('party_id');
            $table->foreign('party_id')->references('id')->on('political_parties');
            $table->unsignedInteger('constituency_id');
            $table->foreign('constituency_id')->references('id')->on('constituencies');
            $table->boolean('voting')->default(false);
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