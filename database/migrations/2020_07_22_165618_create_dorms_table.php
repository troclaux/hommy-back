<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->integer('number_of_rooms')->unsigned();
            $table->string('city');
            $table->string('state');
            $table->string('street');
            $table->integer('dorm_number')->unsigned();
            $table->string('zip_code');
            $table->string('description');
            $table->string('state_initials');

            $table->timestamps();
        });

        Schema::table('dorms', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dorms');
    }
}
