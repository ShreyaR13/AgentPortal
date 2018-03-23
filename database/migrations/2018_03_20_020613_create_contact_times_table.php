<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_times', function (Blueprint $table) {
            $table->increments('contactid');
            // $table->integer('mid')->unsigned(); //future_members_id in future_members table is unsigned
            // $table->integer('mid')->references('id')->on('future_members'); //foreign key
            $table->boolean('morning')->default(false);
            $table->boolean('afternoon')->default(false);
            $table->boolean('evening')->default(false);
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
        Schema::drop('contact_times');
    }
}
