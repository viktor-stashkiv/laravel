<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel', function (Blueprint $table) {
            $table->id('id');
            $table->string('first_name'); 
            $table->string('last_name');
            $table->string('name_father'); 
            $table->string('place_of_residence');
            $table->string('phone_number'); 
            $table->string('room');
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
        Schema::dropIfExists('hostels');
    }
}
